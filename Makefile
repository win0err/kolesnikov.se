SHELL=/bin/bash -o pipefail

convert_flags = -quality 100
jpegoptim_flags = --all-progressive --strip-all -m86

dist_dirs = dist/photography/full/ dist/photography/thumbs/ \
			dist/scripts/ dist/assets/ \
			dist/.well-known/openpgpkey/hu/

php_src = $(shell find src src/blog -maxdepth 1 -type f -name '*.php')
php = $(php_src:src/%.php=dist/%.html)
php_includes = $(shell find src/template -type f -name '*.php')

html_src = $(shell find src -type f -name '*.html')
html = $(html_src:src/%=dist/%)

css = $(shell find src/styles -type f -name '*.css')

assets_src = $(shell find assets -type f)
skipped_assets = assets/favicon.ico
assets = $(addprefix dist/, $(filter-out $(skipped_assets),$(assets_src)))

custom_assets = dist/assets/about.jpg dist/assets/about@2x.jpg \
				dist/favicon.ico \
				dist/robots.txt dist/humans.txt

scripts_src = $(shell find src/scripts -type f -name '*.php')
scripts = $(scripts_src:src/%=dist/%)

photos_src := $(shell find photography -type f -exec file --mime-type {} \+ | awk -F: '{if ($$2 ~/image\//) print $$1}')
photos_src := $(addsuffix .jpg, $(basename $(photos_src)))
photos_full = $(photos_src:photography/%=dist/photography/full/%)
photos_thumbs = $(photos_src:photography/%=dist/photography/thumbs/%)

pgp_user = 26062BDBE8E66DA9AB3E780CBAC68A790D8AD1F2
zbase32_user = mdekzg4taonbkkeon37s9b5trq1h1u7x  # gpg --with-wkd-hash --list-public-keys

excluded_files = {scripts/game_of_life_state.json,scripts/pending_guestbook_messages.txt,scripts/pending_comments.txt,.DS_Store}
creating_files = scripts/game_of_life_state.json scripts/pending_guestbook_messages.txt scripts/pending_comments.txt


all: dist photography assets styles html php pgp wkd scripts

dist: $(dist_dirs)
photography: dist $(photos_thumbs) $(photos_full)
assets: dist $(assets) $(custom_assets)
styles: dist dist/styles.css
html: dist $(html)
php: dist src/contacts.php $(php)
pgp: dist dist/win0err.asc dist/contacts.asc dist/.well-known/security.txt
wkd: dist dist/.well-known/openpgpkey/hu/$(zbase32_user) dist/.well-known/openpgpkey/policy
scripts: dist $(scripts)

$(dist_dirs):
	mkdir -p "$@"

src/contacts.php: src/contacts.txt  # to render "last update" properly
	touch "$@" -r "$<"

dist/contacts.asc: src/contacts.txt
	gpg --yes --output "$@" --local-user $(pgp_user) --clearsign "$<"

dist/win0err.asc:
	gpg --armor --export-options export-minimal --export $(pgp_user) > "$@"

dist/photography/full/%.jpg: photography/%.*
	@mkdir -p "$(@D)"
	convert -resize '1920x1920>' $(convert_flags) "$<" "$@"
	jpegoptim $(jpegoptim_flags) "$@"

dist/photography/thumbs/%.jpg: photography/%.*
	@mkdir -p "$(@D)"
	convert -thumbnail '800x800>' $(convert_flags) "$<" "$@"
	convert -thumbnail '1600x1600>' $(convert_flags) "$<" $(patsubst %.jpg,%@2x.jpg, $@)
	jpegoptim $(jpegoptim_flags) "$@" $(patsubst %.jpg,%@2x.jpg, $@)

dist/assets/about.jpg: assets/about.jpg
	convert -thumbnail '800x800>' $(convert_flags) "$<" "$@"
	jpegoptim $(jpegoptim_flags) "$@"

dist/assets/about@2x.jpg: assets/about.jpg
	convert -thumbnail '1600x1600>' $(convert_flags) "$<" "$@"
	jpegoptim $(jpegoptim_flags) "$@"

dist/assets/%: assets/%
	@mkdir -p $(dir $@)
	cp "$<" "$@"

dist/styles.css: $(css)
	cat $^ > $@

dist/favicon.ico: assets/favicon.ico
	cp "$<" "$@"

dist/%.txt: src/%.txt
	cp "$<" "$@"


src/photography.php: src/photos.json
	touch "$@" -r "$<"

dist/index.html: src/contacts.txt
dist/contacts.html: dist/contacts.asc
dist/%.html: src/%.php $(php_includes) dist/styles.css
	@mkdir -p $(@D)
	php "$<" > "$@"

dist/%.html: src/%.html
	@mkdir -p $(@D)
	cp "$<" "$@"

dist/scripts/%.php: src/scripts/%.php
	@mkdir -p $(@D)
	cp "$<" "$@"

dist/.well-known/openpgpkey/policy:
	true > "$@"

dist/.well-known/openpgpkey/hu/$(zbase32_user):
	gpg --no-armor --export-options export-minimal --export $(pgp_user) > "$@"

dist/.well-known/security.txt: src/.well-known/security.txt
	gpg --yes --output "$@" --local-user $(pgp_user) --clearsign "$<"


clean:
	rm -rf dist/


server:
	php -S 0.0.0.0:8080 -t dist/


publish: all
	rsync -avz \
		--exclude=$(excluded_files) \
		--chown deploy:www-data \
		dist/ deploy@kolesnikov.se:/var/www/kolesnikov.se/html && \
	ssh deploy@kolesnikov.se '\
		cd /var/www/kolesnikov.se/html && \
		touch $(creating_files) && \
		chmod 666 $(creating_files) && \
		chown deploy:www-data $(creating_files)'

publish-photos: photography
	rsync -avz --chown www-data dist/photography/ deploy@kolesnikov.se:/var/www/kolesnikov.se/html/photography


.PHONY: all clean photography assets styles html php wkd pgp dist scripts server publish publish-photos

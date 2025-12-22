SHELL=/bin/bash -o pipefail

pgp_user := 26062BDBE8E66DA9AB3E780CBAC68A790D8AD1F2
zbase32_user := mdekzg4taonbkkeon37s9b5trq1h1u7x  # gpg --with-wkd-hash --list-public-keys

convert_flags := -quality 100
jpegoptim_flags := --all-progressive --strip-all --max=97


images_full_dir := dist/images/full/
images_thumbs_dir := dist/images/thumbs/

dist_dirs := $(images_full_dir) $(images_thumbs_dir) \
			dist/blog/ dist/scripts/ dist/assets/ dist/resume/ \
			dist/.well-known/openpgpkey/hu/

php := $(patsubst src/%.php,dist/%.html,$(wildcard src/*.php src/blog/*.php))
php_includes := $(wildcard src/_template/*.php)

css := $(wildcard src/styles/*.css src/styles/*/*.css)

assets_src := $(wildcard assets/*.* assets/*/*.* assets/*/*/*.*)
skipped_assets := assets/favicon.ico
assets := $(addprefix dist/, $(filter-out $(skipped_assets),$(assets_src)))

custom_assets := dist/assets/about.jpg dist/assets/about@2x.jpg \
				 dist/favicon.ico \
				 dist/robots.txt dist/humans.txt

scripts := $(patsubst src/%,dist/%,$(wildcard src/scripts/*.php) src/scripts/blocked_words.txt)

images_src := $(wildcard src/photography/*.jpg src/photography/*/*.jpg src/blog/*/*.jpg)
images_full := $(images_src:src/%=dist/images/full/%)
images_thumbs := $(images_src:src/%=dist/images/thumbs/%)

resume_deps := src/resume/config.tex src/resume/userpic.jpg
resume_texs := $(filter-out $(resume_deps),$(wildcard src/resume/*.tex))
resume_pdfs := $(resume_texs:src/%.tex=dist/%.pdf)


state_files := {scripts/game_of_life_state.json,scripts/pending_guestbook_messages.txt,scripts/pending_comments.txt}


all: dist images assets styles php pgp wkd scripts feeds resume

dist: $(dist_dirs)
images: dist $(images_thumbs) $(images_full)
assets: dist $(assets) $(custom_assets)
styles: dist dist/styles.css
php: dist $(php)
pgp: dist dist/win0err.asc dist/contacts.asc dist/.well-known/security.txt
wkd: dist dist/.well-known/openpgpkey/hu/$(zbase32_user) dist/.well-known/openpgpkey/policy
scripts: dist $(scripts)
feeds: dist dist/blog.atom dist/news.atom
resume: dist $(resume_pdfs)


$(dist_dirs):
	mkdir -p "$@"

dist/images/full/%.jpg: */%.jpg
	@mkdir -p "$(@D)"
	magick "$<" -resize '1920x1920>' $(convert_flags) "$@"
	jpegoptim $(jpegoptim_flags) "$@"

dist/images/thumbs/%.jpg: */%.jpg
	@mkdir -p "$(@D)"
	magick "$<" -thumbnail '800x>' $(convert_flags) "$@"
	magick "$<" -thumbnail '1600x>' $(convert_flags) $(patsubst %.jpg,%@2x.jpg, $@)
	jpegoptim $(jpegoptim_flags) "$@" $(patsubst %.jpg,%@2x.jpg, $@)


dist/assets/about.jpg: assets/about.jpg
	magick "$<" -thumbnail '800x>' $(convert_flags) "$@"
	jpegoptim $(jpegoptim_flags) "$@"

dist/assets/about@2x.jpg: assets/about.jpg
	magick "$<" -thumbnail '1600x>' $(convert_flags) "$@"
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

dist/%.atom: src/%.atom
	cp "$<" "$@"


dist/contacts.asc: src/contacts.txt
	gpg --yes --output "$@" --local-user $(pgp_user) --clearsign "$<"

dist/win0err.asc:
	gpg --armor --export-options export-minimal --export $(pgp_user) > "$@"


src/contacts.php: src/contacts.txt  # to render "last update" properly
	touch "$@" -r "$<"

src/photography.php: src/photography/meta.json  # to render "last update" properly
	touch "$@" -r "$<"


dist/index.html: src/contacts.txt  # rel="me", no need to update "last update" info
dist/contacts.html: dist/contacts.asc  # to include signed contacts

dist/%.html: src/%.php $(php_includes) dist/styles.css
	php "$<" > "$@"

dist/scripts/%.php: src/scripts/%.php
	cp "$<" "$@"

dist/.well-known/openpgpkey/policy:
	true > "$@"

dist/.well-known/openpgpkey/hu/$(zbase32_user):
	gpg --no-armor --export-options export-minimal --export $(pgp_user) > "$@"

dist/.well-known/security.txt: src/.well-known/security.txt
	gpg --yes --output "$@" --local-user $(pgp_user) --clearsign "$<"


$(resume_pdfs): $(resume_deps)

dist/%.pdf: src/%.tex
	latexmk -quiet -f -cd -xelatex -interaction=nonstopmode $<
	latexmk -quiet -c -cd $<
	mv $(@:dist/%=src/%) $@


clean-all:
	rm -rf dist/

clean: $(filter-out dist/images,$(wildcard dist/* dist/.well-known))
	rm -rf $^


server:
	php -S 0.0.0.0:8080 -t dist/


publish-content: all
	rsync -avz \
		--checksum \
		--exclude="images/" \
		--exclude=$(state_files) \
		--exclude=".DS_Store" \
		--chown deploy:www-data \
		dist/ deploy@kolesnikov.se:/var/www/kolesnikov.se/html
	ssh deploy@kolesnikov.se '\
		cd /var/www/kolesnikov.se/html && \
		touch $(state_files) && \
		chmod 666 $(state_files) && \
		chown deploy:www-data $(state_files)'

publish-images: all
	rsync -avz \
		--checksum \
		--exclude=".DS_Store" \
		--chown deploy:www-data \
		dist/images/ deploy@kolesnikov.se:/var/www/kolesnikov.se/html/images

publish: all publish-content publish-images


.PHONY: all clean-all clean images assets styles php wkd pgp resume dist scripts feeds server publish-content publish-images publish

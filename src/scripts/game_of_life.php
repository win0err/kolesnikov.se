<?php

const STATE_FILE_PATH = 'game_of_life_state.json';

const WIDTH = 400;
const HEIGHT = 300;


function generate_next_generation(array $state, int $generation): array {
    $next_state = [];

    // may be faster, but it's fast enough for my blog
    for ($y = 0; $y < HEIGHT; $y++) {
        for ($x = 0; $x < WIDTH; $x++) {
            $alive_neighbours = @$state[$x-1][$y-1]
                + @$state[$x-1][$y]
                + @$state[$x-1][$y+1]
                + @$state[$x][$y-1]
                + @$state[$x][$y+1]
                + @$state[$x+1][$y-1]
                + @$state[$x+1][$y]
                + @$state[$x+1][$y+1];

            $is_cell_alive = $state[$x][$y];

            $cell_next_state = $alive_neighbours === 3 || ($alive_neighbours === 2 && $is_cell_alive);
            $next_state[$x][$y] = (int) $cell_next_state;
        }
    }

    return ['state' => $next_state, 'generation' => $generation + 1];
}

function create_image_from_state(array $state, int $generation): \GdImage {
    $text_offset_x = 1;
    $text_offset_y = HEIGHT;
    $text_height = 10;

    $gd = imagecreatetruecolor(WIDTH, HEIGHT+$text_height);

    $text_color = imagecolorallocate($gd, 255, 255, 255);
    $alive_color = imagecolorallocate($gd, 16, 192, 16);
    $dead_color = imagecolorallocate($gd, 0, 0, 0);
    // imagecolortransparent($gd, $dead_color);

    $alive_count = 0;
    $total_count = WIDTH*HEIGHT;

    imagefill($gd, 0, 0, $dead_color);

    for ($y = 0; $y < HEIGHT; $y++) {
        for ($x = 0; $x < WIDTH; $x++) {
            if ($state[$x][$y]) {
                imagesetpixel($gd, $x, $y, $alive_color);
                $alive_count += 1;
            }
        }
    }

    $text = "gen: $generation; alive: $alive_count/$total_count";
    imagestring($gd, 1, $text_offset_x, $text_offset_y, $text, $text_color);

    return $gd;
}



$generation = 1;
$state = [];

$fp = fopen(STATE_FILE_PATH, 'c+');

if (flock($fp, LOCK_EX)) {
    $contents = false;

    fseek($fp, 0, SEEK_END);
    $size = ftell($fp);

    if ($size > 0) {
        fseek($fp, 0, SEEK_SET);
        $contents = fread($fp, $size);
        fseek($fp, 0, SEEK_SET);

        ['state' => $state, 'generation' => $generation] = json_decode($contents, true);
    } else {
        for ($y = 0; $y < HEIGHT; $y++) {
            for ($x = 0; $x < WIDTH; $x++) {
                $state[$x][$y] = rand(0, 1);
            }
        }
    }

    if (isset($_GET['x']) && isset($_GET['y'])) {
        $state[$_GET['x']][$_GET['y']] = 1;
    }

    $next = generate_next_generation($state, $generation);

    ftruncate($fp, 0);
    fwrite($fp, json_encode($next));

    fflush($fp);
    flock($fp, LOCK_UN);
}

fclose($fp);


header('Content-Type: image/png');

$gd = create_image_from_state($state, $generation);
imagepng($gd);
imagedestroy($gd);

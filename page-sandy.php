<?php

use Pearlpuppy\CoCore\Myt\Tribune;

/**
 * The Initial template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AquaMonte
 * @subpackage AquqMonte_bebe
 * @since AquaMonte 0.0
 */

global $aquamonte;

/**
 *
 */

/**
 *
 */

/**
 *
 */

$aquamonte->slap($aquamonte, 'AM Product');

get_header();
?>
<main id="container">
<div class="liner">

<?php

function recursiveArrayMerge($array1, $array2) {
    foreach ($array2 as $key => $value) {
        if (is_array($value) && isset($array1[$key]) && is_array($array1[$key])) {
            $array1[$key] = recursiveArrayMerge($array1[$key], $value);
        } else {
            $array1[$key] = $value;
        }
    }
    return $array1;
}

// テストする多次元連想配列
$array1 = [
    "fruits" => ["apple", "banana"],
    "colors" => ["red" => "apple", "yellow" => "banana"],
    "weights" => ["apple" => 50, "banana" => 70]
];

$array2 = [
    "fruits" => ["grape"],
    "colors" => ["purple" => "grape"],
    "weights" => ["apple" => 55, "grape" => 100],
    "tastes" => ["grape" => "sweet"]
];

// 配列を再帰的にマージ
$mergedArray = recursiveArrayMerge($array1, $array2);

echo '<pre><code>';
echo <<< EOD
\$array1 = [
    "fruits" => ["apple", "banana"],
    "colors" => ["red" => "apple", "yellow" => "banana"],
    "weights" => ["apple" => 50, "banana" => 70]
];

\$array2 = [
    "fruits" => ["grape"],
    "colors" => ["purple" => "grape"],
    "weights" => ["apple" => 55, "grape" => 100],
    "tastes" => ["grape" => "sweet"]
];
EOD;
echo '</code></pre>';

// 結果を表示
echo "Merged Array:\n<pre><code>";
print_r($mergedArray);
echo '</code></pre>';

echo "array_merge_recursive:\n<pre><code>";
print_r(array_merge_recursive($array1, $array2));
echo '</code></pre>';

echo "array_replace_recursive:\n<pre><code>";
print_r(array_replace_recursive($array1, $array2));
echo '</code></pre>';

/**
 *  !! DO NOT REMOVE
 */
if (Tribune::isLocal()) {
    $aquamonte->consExpose();
}
?>
</div><!--//.liner-->
</main><!--//#container-->

<?php
get_footer();

/**
 *
 *
echo <<< EOD
<h2>ほげまげEODぐがふが。</h2> 
EOD;

/**
 *
 */

/**
 *
 *  hookActionAdminEnqueueScripts
$hoge = parse_ini_file('support.ini', true, INI_SCANNER_TYPED);

/**
 *
 *
$str = 'hookActionAdminEnqueueScripts';

preg_match('/Action(\w+)Enqueue/', $str, $matches);

$aquamonte->slap($_SERVER, '_Sv');
$aquamonte->slap($matches, '_is');
$aquamonte->slap(wp_get_theme()->get('stylesheet'));
$aquamonte->slap(wp_style_is('cocore'), '_EQ');

/**
 *
 */

/**
 *
 */

/**
 *
 */

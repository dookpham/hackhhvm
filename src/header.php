<?hh // strict

require_once('../vendor/autoload.php');

function testing(): void {
  /* HH_FIXME[2049] */
  $myDiv = <div>Hello World</div>;
  echo $myDiv;
}

/* HH_FIXME[1002] */
testing();

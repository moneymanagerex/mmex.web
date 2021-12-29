<!-- Money Manager Ex Files -->
<div class="w3-container" id="mmex" style="margin-top:40px">
    <h1 class="w3-xxxlarge w3-text-black"><img src = "https://raw.githubusercontent.com/moneymanagerex/moneymanagerex/master/resources/mmex.png" alt = "MMEX"><br><b>Money Manager Ex</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p><a href="https://www.moneymanagerex.org">Money Manager Ex</a> is a free, open-source, cross-platform, easy-to-use personal finance software. It primarily helps organize one's finances and keeps track of where, when and how the money goes. It is also a great tool to get a bird's eye view of your financial worth.
    </p>
    <p>Money Manager includes all the basic features that 90% of users would want to see in a personal finance application. The design goals are to concentrate on simplicity and user-friendliness - something one can use every day.</p>
    <p><b>Please visit the <a href="https://www.moneymanagerex.org">Money Manager EX</a> site for full detail on the software and other platform releases.</b></p>
    <p>On this site you will find MacOS builds for Money Manager that have been signed and notarised by Apple. Notarization gives users more confidence that the software has been checked by Apple for malicious components.</p>
</div>

<?php
$latestInDev = "1.5.12";
$stable = array_diff(scandir("builds/stable", SCANDIR_SORT_DESCENDING), array(".", "..") );
natsort($stable);
$stable = array_reverse($stable, true);
$beta = array_diff(scandir("builds/beta", SCANDIR_SORT_DESCENDING), array(".", "..") );
$alpha = array_diff(scandir("builds/alpha", SCANDIR_SORT_DESCENDING), array(".", "..") );
?>

<div class="w3-container">
  <h2>Stable Builds</h2>
  <p>These are the official release builds.</p>
</div>

<?php
foreach ($stable as $build)
{
  $buildElement = explode("-",$build);
  echo "<div class=\"w3-row w3-container\">\n";
  echo "<div class=\"w3-col m2 w3-green w3-center w3-border\"><a href=\"builds/stable/$build\">v".$buildElement[1]."</a></div>\n";
  echo "<div class=\"w3-col m2 w3-gray w3-center w3-border\"><a href=\"https://github.com/moneymanagerex/moneymanagerex/releases/tag/v".$buildElement[1]."\">Release Notes</a></div>\n";
  echo "</div>\n";
}
?>

<div class="w3-container">
  <h2>Beta Builds</h2>
  <p>These builds allow you to test the latest bug fixes and new features. They tend to be relatively stable but may
    have a few rough edges.</p>
</div>

<?php
$foundBeta = false;
foreach ($beta as $build)
{
  $buildElement = explode("-",$build);
  if (!strcmp($latestInDev, $buildElement[1]))
  {
    echo "<div class=\"w3-row w3-container\">\n";
    echo "<div class=\"w3-col m3 w3-orange w3-center w3-border\"><a href=\"builds/beta/$build\">v".$buildElement[1]." ".$buildElement[2]."</a></div>\n";
    echo "<div class=\"w3-col m3 w3-gray w3-center w3-border\">".$buildElement[4].".".$buildElement[5].".".substr($buildElement[6],0,2)."</a></div>\n";
    echo "</div>\n";
    $foundBeta = true;
  }
}
if (!$foundBeta)
{
  echo "<div class=\"w3-row w3-container\">\n";
  echo "<div class=\"w3-col m3 w3-orange w3-center w3-border\">None available</div>\n";
  echo "</div>\n";
}
?>

<div class="w3-container">
  <h2>Alpha Builds</h2>
  <p>These builds are very early stage builds that may contain experimental or unfinished features.
    Be very sure to use backups before you try.
  </p>
</div>

<?php
  $foundAlpha = false;
  foreach ($alpha as $build)
  {
    $buildElement = explode("-",$build);
    if (!strcmp($latestInDev, $buildElement[1]))
    {
      echo "<div class=\"w3-row w3-container\">\n";
      echo "<div class=\"w3-col m3 w3-red w3-center w3-border\"><a href=\"builds/beta/$alpha\">v".$buildElement[1]." ".$buildElement[2]."</a></div>\n";
      echo "<div class=\"w3-col m3 w3-red w3-center w3-border\">".$buildElement[4].".".$buildElement[5].".".substr($buildElement[6],0,2)."</a></div>\n";
      echo "</div>\n";
      $foundAlpha = true;
    }
  }
  if (!$foundAlpha)
  {
    echo "<div class=\"w3-row w3-container\">\n";
    echo "<div class=\"w3-col m3 w3-red w3-center w3-border\">None available</div>\n";
    echo "</div>\n";
  }
?>
<?php

$triggers = explode(',', @$_GET['triggers']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/styles/solarized-light.min.css">
</head>
<body>
<div class="container">
  <div class="bs-docs-section">
    <?php foreach ($triggers as $trigger): ?>
      <div class="row">
        <div class="col-lg-8 pr-lg-0">
          <button class="btn btn-primary" data-trigger="<?=$trigger?>">RUN</button> <?=$trigger?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<script>
  document.getElementById('webrequest-submit').addEventListener('click', event => {
    event.preventDefault();
    let url = location.origin + location.pathname;
    document.getElementById('webrequest-result').value = 'Loading...';
    document.getElementById('webrequest-submit-label').style.display = 'none';
    document.getElementById('webrequest-submit-spinner').style.display = 'inline-block';
    fetch(url, {
      method: 'POST',
      mode: 'no-cors',
    }).then(response => {
      return response.text().then(result => {
        document.getElementById('webrequest-result').value = result;
        document.getElementById('webrequest-result-panel').style.display = 'block';
        document.getElementById('webrequest-submit-label').style.display = 'inline';
        document.getElementById('webrequest-submit-spinner').style.display = 'none';
      });
    });
  }, false);
</script>
</body>
</html>

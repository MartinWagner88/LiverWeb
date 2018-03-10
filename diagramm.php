<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<title>Unbenanntes Dokument</title>
<title>Unbenanntes Dokument</title>
</head>

<body>

<div class="btn-group btn-group-justified">
  <a href="#" class="btn btn-primary" id="meld" onClick="diagramm_laden_funktion('meld')">MELD</a>
  <a href="#" class="btn btn-primary"id="pruritus"  onClick="diagramm_laden_funktion('pruritus_intensitaet')">Pruritus</a>
  <a href="#" class="btn btn-primary" id="gpt"  onClick="diagramm_laden_funktion('gpt')">GPT</a>
    <a href="#" class="btn btn-primary" id="hbv"  onClick="diagramm_laden_funktion('hbv_dna')">HBV-DNA</a>
</div>

<div style="width:50%; height: 50%">
<canvas id="Diagramm"></canvas>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
<script src="js/diagramm_laden.js"></script>
</body>
</html>

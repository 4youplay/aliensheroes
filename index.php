<!doctype html>
<html>
       <head>
              <title>Little Aliens Heroes</title>
              <meta http-equiv="content-type" content="text/html; charset=UTF-8">
              <link href="styles.css" rel="stylesheet" type="text/css">
              <script src="soundmanager2-setup.js"></script>
  			  <script src="soundmanager2-jsmin.js"></script>
       </head>

       <body>
     
<div align="center" id="embed-html"></div>
<script type="text/javascript" src="html/html.nocache.js"></script>

   
       </body>

       <script>
              function handleMouseDown(evt) {
                evt.preventDefault();
                evt.stopPropagation();
                evt.target.style.cursor = 'default';
              }

              function handleMouseUp(evt) {
                evt.preventDefault();
                evt.stopPropagation();
                evt.target.style.cursor = '';
              }
              document.getElementById('embed-html').addEventListener('mousedown', handleMouseDown, false);
              document.getElementById('embed-html').addEventListener('mouseup', handleMouseUp, false);
       </script>
</html>
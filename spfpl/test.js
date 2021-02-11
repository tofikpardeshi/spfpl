
    window.onload = function() {
        document.addEventListener(“contextmenu”, function(e){
            e.preventDefault();
            if(event.keyCode == 123) {
            disableEvent(e);
        }
        }, false);
     function disableEvent(e) {
            if(e.stopPropagation) {
                e.stopPropagation();
            } else if(window.event) {
                window.event.cancelBubble = true;
            }
        }
    }
    $(document).contextmenu(function() { return false;});
    url = “SPFPL-Annual-Report-FY-2018-19.pdf”;
    var thePdf = null;
    var scale = 1;
    pdfjsLib.getDocument(url).promise.then(function(pdf) {
              thePdf = pdf;
              viewer = document.getElementById(‘pdf-viewer’);
              for(page = 1; page <= pdf.numPages; page++) {
                canvas = document.createElement(“canvas”);
                canvas.className = ‘pdf-page-canvas’;
                viewer.appendChild(canvas);
                renderPage(page, canvas);
              }
          });
          function renderPage(pageNumber, canvas) {
              thePdf.getPage(pageNumber).then(function(page) {
                viewport = page.getViewport(scale);
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                page.render({canvasContext: canvas.getContext(‘2d’), viewport: viewport});
          });
          }
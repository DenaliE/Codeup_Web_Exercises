$(document).ready(function() {
    
var timeoutId = setTimeout();
var delay = 5000;
        function save() {
            console.log('Saved!');
        }

        function autosave() {
            
            console.log(timeoutId);

            clearTimeout(timeoutId);
            // todo:
            // Use setTimeout and clearTimeout within this function
            // so that the save() function is called 5 seconds after
            // the last key up event. If a new key up event occurs,
            // you need to cancel the existing timer and set a new one.
            
            timeoutId = setTimeout(function () {
                save();
                // clearTimeout(timeoutId);
            }, delay); 
        }

        // setTimeout(function () {}, 3000);
        
        // don't modify the line below
        // this causes the autosave function to be called whenever
        // a key up event occurs in the textarea
        // we will learn about events in the DOM lessons

        $('#important').on('keyup', autosave);

        // var textarea = document.getElementById('important');
        // textarea.addEventListener('keyup', autosave, false);

  
     
     });
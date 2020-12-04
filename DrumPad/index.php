<!-- Author: Gabriel Lewis -->
<!-- Rasp-MIDI Pi -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php include("header.php");?>
    <body>
        
        <!--<h1>Rasp-MIDI Pi</h1>-->    
        
        <div class="row" id="rasp-midi-pi" >
            <div class="col-sm-12">
                <img src="images/title_1.png" alt="Rasp-MIDI PI" style="height: 400px; width: auto">
            </div>
        </div>
        
        <div class="row midiRow">
            <div class='container' id="io">
                <h1 id="midiText">Input:</h1>
                <select id=midiIn onchange='changeMidiIn();'>
                    <option value="">Not connected</option>
                </select>
                <h1 id="midiText">Output:</h1>
                <select id=midiOut onchange='changeMidiOut();'>
                    <option value="">Not connected</option>
                </select>
            </div>
        </div>
        
        <!--PAD-->
        <div class="col-sm-6 pad">
            <div class="row r-1">
                <div class="col-lg-3">
                    <div class="box pad-1" data-code="86">1</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-2" data-code="66">2</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-3" data-code="72">3</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-4" data-code="74">4</div>
                </div>     
            </div>
            <div class="row r-2">
                <div class="col-lg-3">
                  <div class="box pad-5" data-code="86">5</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-6" data-code="66">6</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-7" data-code="72">7</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-8" data-code="74">8</div>
                </div>     
            </div>
            <div class="row r-3">
                <div class="col-lg-3">
                  <div class="box pad-9" data-code="86">9</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-10" data-code="66">10</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-11" data-code="72">11</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-12" data-code="74">12</div>
                </div>     
            </div>
            <div class="row r-4">
                <div class="col-lg-3">
                  <div class="box pad-13" data-code="86">13</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-14" data-code="71">14</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-15" data-code="72">15</div>
                </div>
                <div class="col-lg-3">
                  <div class="box pad-16" data-code="74">16</div>
                </div>     
            </div>
        </div>
        

    </body>
</html>

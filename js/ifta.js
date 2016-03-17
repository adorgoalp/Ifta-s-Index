function  loadCalcSS()
{
    document.getElementById("sc").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/calc/main.JPG'>\n\
                                        <img src='img/calc/main-small.JPG'>\n\
                                        <img src='img/calc/help.JPG'>\n\
                                        <img src='img/calc/about.JPG'>\n\
                                        <button class='btn btn-black' \n\
                                         onclick='unloadCalcSS()'>Hide screen shots</button>";
}
function unloadCalcSS()
{
    document.getElementById("sc").innerHTML = "<button class='btn btn-black' \n\
                                        onclick='loadCalcSS()'>View screen shots</button>";
}
function loadRiceRocksSS()
{
    document.getElementById("rr").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/rr/rr1.jpg'>\n\
                                        <img src='img/rr/rr2.jpg'>";
}
function loadKidelSS()
{
    document.getElementById("kidel").innerHTML = "<h4>Screen shots</h4>\n\
                                        <img src='img/kidel/interface.jpg'>\n\
                                        <img src='img/kidel/addition.jpg'>\n\
                                        <img src='img/kidel/color.jpg'>\n\
                                        <img src='img/kidel/firstletter.jpg'>\n\
                                        <img src='img/kidel/how-many.jpg'>\n\
                                        <img src='img/kidel/this-is.jpg'>";
}
function loadTheMuslimShowSS()
{
    document.getElementById("tms").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/tms/list.jpg'>\n\
                                    <img src='img/tms/destination.jpg'>\n\
                                    <img src='img/tms/mother.jpg' style='width:98%;'>\n\
                                    <img src='img/tms/reversible.jpg' style='width:98%;'>";
}
function loadUnbeatableTicTacToeSS() {
    document.getElementById("uttt").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/ttt/good.jpg'>\n\
                                    <img src='img/ttt/main.jpg'>\n\
                                    <img src='img/ttt/ai-won.jpg'>\n\
                                    <img src='img/ttt/blank.jpg'>";
}
function loadTajMahalSS()
{
    document.getElementById("taj").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/taj/front.jpg' alt='front viwe'>\n\
                                    <img src='img/taj/main.jpg' alt='main view'>\n\
                                    <img src='img/taj/small.jpg' alt='small red building'>\n\
                                    <img src='img/taj/side.jpg' alt='side view'>";
}
function loadRayTracerSS() {
    document.getElementById("ray").innerHTML = "<h4>Screen shots</h4>\n\
                                    <img src='img/ray/output.jpg' alt='output 1'>\n\
                                    <img src='img/ray/output1.jpg' alt='output 2'>\n\
                                    <img src='img/ray/output3.jpg' alt='output 3'>\n\
                                    <img src='img/ray/output4.jpg' alt='output 4'>";
}
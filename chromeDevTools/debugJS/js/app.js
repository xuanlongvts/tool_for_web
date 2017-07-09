function increment() {
    debugger;
    var total = 0;
    nextFunc();
    for (var i = 0; i < 3; i++){
        total++;
    }
}

setTimeout(increment, 2000);

function nextFunc() {
    console.log('Next Function');
}
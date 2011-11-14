    var deviceInfo = function(){
      document.getElementById("platform").innerHTML = device.platform;
      document.getElementById("version").innerHTML = device.version;
      document.getElementById("uuid").innerHTML = device.uuid;
      console.log("Height:" + window.innerHeight);
      console.log("Width:" + window.innerWidth);
    }

    var getCompass = function() {
        console.log("getCompass()");
        var suc = function(a){
            console.log("getCompass successful");
            document.getElementById('compassHeading').innerHTML = roundNumber(a.trueHeading);
        };
        var fail = function(){
            console.log("getCompass failed");
        };
        navigator.compass.getCurrentHeading(suc,fail,null);
    }

    var watchCompass = function() {
        console.log("watchCompass()");
        var suc = function(a){
            console.log("watchCompass successful");
            document.getElementById('compassHeading').innerHTML = roundNumber(a.trueHeading);
        };
        var fail = function(){
            console.log("watchCompass failed");
        };
        var opt = {};
        opt.frequency = 1000;
        timer = navigator.compass.watchHeading(suc,fail,opt);
        console.log("Watch Id="+timer);
    }

    var stopWatchCompass = function() {
        navigator.compass.clearWatch(timer);
    }

    function roundNumber(num) {
      var dec = 3;
      var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
      return result;
    }

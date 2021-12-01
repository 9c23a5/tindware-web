function neonLightEffect() {
    var text = "TindWare('"+String.fromCharCode(0x2665)+"')";
    var font = "120px Futura, Helvetica, sans-serif";
    var jitter = 25; // the distance of the maximum jitter
    var offsetX = 30;
    var offsetY = 70;
    var blur = getBlurValue(100);

    ctx.save();
    ctx.font = font;
    var metrics = getMetrics(text, font);
    ctx.rect(offsetX - blur/2, offsetY - blur/2,
                    offsetX + metrics.width + blur, metrics.height + blur);
    ctx.clip();
    ctx.save();
     ctx.fillStyle = "#fff";
    ctx.shadowColor = "rgba(0,0,0,1)";
    ctx.shadowOffsetX = metrics.width + blur;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = blur;
    ctx.fillText(text, -metrics.width + offsetX - blur, offsetY + metrics.top);
    ctx.restore();
    var gradient = ctx.createLinearGradient(0, 0, metrics.width, 0);
    gradient.addColorStop(0, "rgba(255, 0, 0, 1)");
    gradient.addColorStop(0.15, "rgba(255, 255, 0, 1)");
    gradient.addColorStop(0.3, "rgba(0, 255, 0, 1)");
    gradient.addColorStop(0.5, "rgba(0, 255, 255, 1)");
    gradient.addColorStop(0.65, "rgba(0, 0, 255, 1)");
    gradient.addColorStop(0.8, "rgba(255, 0, 255, 1)");
    gradient.addColorStop(1, "rgba(255, 0, 0, 1)");
    ctx.globalCompositeOperation = "source-atop";
    ctx.fillStyle = gradient;
    ctx.fillRect(offsetX - jitter/2, offsetY,
                metrics.width + offsetX, metrics.height + offsetY);
    ctx.globalCompositeOperation = "lighter";
    ctx.globalAlpha = 0.7
    ctx.drawImage(ctx.canvas, 0, 0);
    ctx.drawImage(ctx.canvas, 0, 0);
    ctx.globalAlpha = 1
    ctx.fillStyle = "rgba(255,255,255,0.95)";
    ctx.fillText(text, offsetX, offsetY + metrics.top);
    ctx.lineWidth = 0.80;
    ctx.strokeStyle = "rgba(255,255,255,0.25)";
    var i = 10; while(i--) { 
        var left = jitter / 2 - Math.random() * jitter;
        var top = jitter / 2 - Math.random() * jitter;
        ctx.strokeText(text, left + offsetX, top + offsetY + metrics.top);
    }    
    ctx.strokeStyle = "rgba(0,0,0,0.20)";
    ctx.strokeText(text, offsetX, offsetY + metrics.top);
    ctx.restore();
};



function neonLightEffect() {
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.font = "30px 'Press Start 2P'";
ctx.fillText("TindWare", 10, 50);}
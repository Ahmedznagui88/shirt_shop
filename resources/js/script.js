function startAnimationProd() {
    
    var i = 0;
    
    
    setInterval(()=>{
        document.getElementById("imgDue").style.transition = "2s opacity"  
        document.getElementById("imgDue").style.opacity = "0"
        document.getElementById("imgUno").style.transition = "2s opacity"  
        document.getElementById("imgUno").style.opacity = "0"
        
        setTimeout(() =>{
            if(i== 0){
                document.getElementById("imgDue").src = "/media/Uno.avif"  
                document.getElementById("imgUno").src = "/media/Due.avif"  
            }else if (i == 1){
                document.getElementById("imgDue").src = "/media/Tre.avif" 
                document.getElementById("imgUno").src = "/media/For.avif" 
            }else if (i == 2){
                document.getElementById("imgDue").src = "/media/Five.avif" 
                document.getElementById("imgUno").src = "/media/Due.avif" 
            }else if(i == 3) {
                document.getElementById("imgDue").src = "/media/Uno.avif" 
                document.getElementById("imgUno").src = "/media/For.avif"  
                i = 0;
            }
            
            document.getElementById("imgDue",).style.opacity = "1"
            document.getElementById("imgDue",).style.transition = "2s opacity"
            document.getElementById("imgUno",).style.opacity = "1"
            document.getElementById("imgUno",).style.transition = "2s opacity"  
            
            
        },2000)
        
        i++
        
    },4000)
}

window.addEventListener("load", function(){
    startAnimationProd()
});

document.addEventListener("DOMContentLoaded", function () {
    const card = document.getElementById("animatedCard");
    card.style.display = "block";
    setTimeout(function () {
        card.style.transform = "translateX(0)";
    }, 100);
});


function updateLigths(){
    fetch("ajax.php").then(response => {
        console.log(response)
        return response.json()
    } )
    .then(data => {
        console.log(data)
        data.forEach(element => {
            console.log(element)
            if(element["status"]){
                named = "#"+element["name"]
                document.querySelector(named).src = "img/light-on.png"
            }
            else{
                named = "#"+element["name"]
                document.querySelector(named).src = "img/light-off.png"
            }
        });
        setTimeout(updateLigths, 2000);
    })
    console.log("OK")
}

updateLigths();
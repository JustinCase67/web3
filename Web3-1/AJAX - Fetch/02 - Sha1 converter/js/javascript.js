let inputNode = document.querySelector("#texte");

// inputNode.onkeyup = (evt) => {}
inputNode.addEventListener("keyup", evt => {
    // console.log(evt.key)

    if (evt.key == "Enter") {
        let texte = inputNode.value;
        let formData = new FormData();
        formData.append("text", texte);

        fetch("ajax.php", {
            method : "post",
            body : formData,
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            let parentNode = document.querySelector("#result");
            // parentNode.innerHTML = "";
            let newNode = document.createElement("div");
            newNode.innerText = data;
            newNode.addEventListener("mouseover", () => {
                newNode.remove();
            })

            parentNode.append(newNode);
        })
    }
})
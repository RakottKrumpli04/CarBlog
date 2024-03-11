
<script>

    function cikk (data){
      let cikkek = document.createElement("div");
      cikkek.id = "cikkek";
      let container = document.querySelector(".container");
      container.appendChild(cikkek);

        for(let obj of data){
            console.log(obj.id);

            document.querySelector("#cikkek").innerHTML+=`
                <p class="fakeimg"></p>
                <h2>${obj.cim}</h2>
                <p class="fakeimg"></p>
                <p>${obj.cikk1}</p>
                <img src="${obj.kep1}" class="img" alt="">
                <p>${obj.cikk2}</p>
                <img src="${obj.kep2}" class="img" alt="">
                <p>${obj.cikk3}</p>
                <img src="${obj.kep3}" class="img" alt="">
                <p class="fakeimg"></p>


            `            
        }

    }
</script>
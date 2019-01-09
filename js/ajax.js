

function fetch_form_data(form_data){
    console.log(form_data)
    let formData = new FormData();
    formData.append('form_data', JSON.stringify(form_data));
    fetch("src/repository/saveComments.php",{
        method:"post",
        body : formData
    }).then(res=>res.text())
      .then(data => {
          console.log("fetch",data)
          return data
        })
}

function get_form_data(){
    fetch("src/repository/getComments.php")
      .then(res=>res.json())
      .then(data => {
          console.log("fetch",data)
          for(let c of data){
              let h5 = $("<h5>");
              h5.append(c.author);
              let small = $("<small>");
              small.append(c.date_pub);
              let texte = $("<p>");
              texte.append(c.texte);
              $("#comment").append(h5);
              $("#comment").append(small);
              $("#comment").append(texte);
            console.log();
          }
          
          return data
        })
}
get_form_data()


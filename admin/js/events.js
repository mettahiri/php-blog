function onSubmit(e){
  e.preventDefault()
  let form_data = {
        titre  : $("#titre").val(),
        text : $("#text").val()
      }

  let img = $("#img");
  var img_data = new FormData();
  img_data.append("img",img[0].files[0]);

  fetch_img(img_data);
  fetch_form_data(img_data);
}

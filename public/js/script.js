var images = [];
        function imagePreview(section, form, target) {
            var image = document.getElementById(section).files;
            for(i = 0; i < image.length; i++){
                if(checkDuplicate(image[i].name)){
                    images.push({
                        "name" : image[i].name,
                        "url" : URL.createObjectURL(image[i]),
                        "file" : image[i],
                    });
                }else{
                    alert(image[i].name + "data sudah terpilih");
                }
            }
            document.getElementById(target).innerHTML = show();
        }

        function show(){
            var image = "";
            images.forEach((i) => {
                image += `<div><img src="${i.url}" width="200"><p onclick="deleteImg(${images.indexOf(i)})">delete</p></div>`
            });
            return image;
        }

        function deleteImg(e){
            images.splice(e, 1);
            document.getElementById('image-preview').innerHTML = show();

        }

        function checkDuplicate(name){
            var image = true;
            if(images.length > 0){
                for(e = 0; e < images.length; e++){
                    if(images[e].name == name){
                        image = false;
                        break;
                    }
                }
            }

            return image;
        }
let fileInput = document.getElementById('file'),
chooseImg = document.querySelector('.choose-img'),
saveImg = document.querySelector('.save-img'),
previewImg = document.querySelector('.preview-img img'),
resetFilter = document.querySelector('.reset-filter'),
filterOptions = document.querySelectorAll('.filter button'),
filterSlider = document.querySelector('.slider input'),
filterName = document.querySelector('.filter-info .name'),
filterValue = document.querySelector('.filter-info .value'),
rotateOptions = document.querySelectorAll('.rotate button'),
filter = document.querySelector('.filter'),
rotate = document.querySelector('.rotate');

let brightness = 100, contrast = 100, invert = 0, hue = 0, saturation = 100, blurred = 0;
let rotateImg =0, flipHorizontal = 1,flipVertical = 1;

chooseImg.addEventListener('click', () => fileInput.click());


function showImage(){
    let file = fileInput.files[0];
    if(!file) return;
    previewImg.src = URL.createObjectURL(file);
    resetFilter.classList.remove('disabled');
    filter.classList.remove('disabled');
    filterSlider.classList.remove('disabled');
    rotate.classList.remove('disabled');
}

fileInput.addEventListener('change',showImage);

function applyFilter(){
    console.log("colored");
    previewImg.style.transform = `rotate(${rotateImg}deg) scale(${flipHorizontal},${flipVertical})`;
    previewImg.style.filter = `brightness(${brightness}%) contrast(${contrast}%) invert(${invert}%) hue-rotate(${hue}deg) 
    saturate(${saturation}%) blur(${blurred}px)`;
}


filterOptions.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('.filter button.active').classList.remove('active');
        option.classList.add('active');
        filterName.innerText = option.innerText;
        if (option.id == 'brightness') {
            console.log("colored");
            filterSlider.min = 0;
            filterSlider.max = 200;
            filterSlider.value = brightness;
            filterValue.innerText = `${brightness}%`;
        }
        else if (option.id == 'contrast'){
            filterSlider.min = 0;
            filterSlider.max = 200;
            filterSlider.value = contrast;
            filterValue.innerText = `${contrast}%`;
        }
        else if (option.id == 'invert'){
            filterSlider.min = 0;
            filterSlider.max = 100;
            filterSlider.value = invert;
            filterValue.innerText = `${invert}%`;
        }
        else if (option.id == 'hue'){
            filterSlider.min = -180;
            filterSlider.max = 180;
            filterSlider.value = hue;
            filterValue.innerText = `${hue}deg`;
        }
        else if (option.id == 'saturation'){
            filterSlider.min = 0;
            filterSlider.max = 200;
            filterSlider.value = saturation;
            filterValue.innerText = `${saturation}%`;
        }
        else if (option.id == 'blur'){
            filterSlider.min = 0;
            filterSlider.max = 20;
            filterSlider.value = blurred;
            filterValue.innerText = `${blurred}px`;
        }
    });
});


function updateSlider(){
    filterValue.innerText = `${filterSlider.value}%`;
    let selectedFilter = document.querySelector('.filter .active');
    if(selectedFilter.id == 'brightness'){
        console.log("colored");
        brightness = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}%`;
    }
    else if(selectedFilter.id == 'contrast'){
        console.log("colored");
        contrast = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}%`;
    }
    else if(selectedFilter.id == 'invert'){
        invert = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}%`;
    }
    else if(selectedFilter.id == 'hue'){
        hue = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}deg`;
    }
    else if(selectedFilter.id == 'saturation'){
        saturation = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}%`;
    }
    else if(selectedFilter.id == 'blur'){
        blurred = filterSlider.value;
        filterValue.innerText = `${filterSlider.value}px`;
    }
    applyFilter();
}


rotateOptions.forEach(rotateOptions => {
        rotateOptions.addEventListener('click',() => {
            if(rotateOptions.id == 'left'){
                rotateImg -= 90;
            }
            else if(rotateOptions.id == 'right'){
                rotateImg += 90;
            }
            else if(rotateOptions.id == 'horizontal'){
                flipHorizontal = flipHorizontal === 1 ? -1 : 1;
            }
            else if(rotateOptions.id == 'vertical'){
                flipVertical = flipVertical === 1 ? -1 : 1;
            }
            applyFilter();
        });
});




function resetFilters(){
    brightness = 100, contrast = 100, invert = 0, hue = 0, saturation = 100, blurred = 0;
    rotateImg =0, flipHorizontal = 1,flipVertical = 1;
    filterOptions[0].click();
    applyFilter();
}

function saveImage(){
    console.log("saved");
    let canvas = document.createElement('canvas');
    let ctx = canvas.getContext('2d');
    canvas.width = previewImg.naturalWidth;
    canvas.height = previewImg.naturalHeight;
    ctx.translate(canvas.width / 2, canvas.height / 2);
    ctx.filter = `brightness(${brightness}%) contrast(${contrast}%) invert(${invert}%) hue-rotate(${hue}deg) 
    saturate(${saturation}%) blur(${blurred}px)`;
    if(rotateImg !== 0){
        ctx.rotate(rotateImg * Math.PI / 180);
    }
    ctx.scale(flipHorizontal,flipVertical);
    ctx.drawImage(previewImg, -canvas.width / 2, -canvas.height / 2, canvas.width, canvas.height);
    let link = document.createElement('a');
    link.download = 'image.png';
    link.href = canvas.toDataURL();
    link.click();
}


saveImg.addEventListener('click',saveImage);

resetFilter.addEventListener('click',resetFilters);

filterSlider.addEventListener('input', updateSlider);


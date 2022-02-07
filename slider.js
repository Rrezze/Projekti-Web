var index = 0;

var images = [];
images[0] = 'foto.jpg';
images[1] = 'ceo2.jpg';
images[2] = 'ceo3.jpg';
images[3] = 'ceo4.jpg';


function slider(){
	if(index < images.length-1){
        index++;
    }
    else{
        index=0;
    }
    document.getElementById('imazhi1').src =images[index];
}
    
function preloadImages () {

    console.log ('loading...');

    const toLoad = [
        '/assets/images/recent/image1.png',
        '/assets/images/recent/image2.png',
        '/assets/images/recent/image3.png',
        '/assets/images/recent/image5.png',
        '/assets/images/skills/bootstrap.jpg',
        '/assets/images/skills/codeigniter.jpg',
        '/assets/images/skills/css3.jpg',
        '/assets/images/skills/gsap.jpg',
        '/assets/images/skills/html5.jpg',
        '/assets/images/skills/java.jpg',
        '/assets/images/skills/js.jpg',
        '/assets/images/skills/laravel.jpg',
        '/assets/images/skills/mongodb.jpg',
        '/assets/images/skills/mysql.jpg',
        '/assets/images/skills/nodejs.jpg',
        '/assets/images/skills/php.jpg',
        '/assets/images/skills/phyton.jpg',
        '/assets/images/skills/socketio.jpg',
        '/assets/images/skills/vuejs.jpg',
        '/assets/images/socials/Facebook.png',
        '/assets/images/socials/Instagram.png',
        '/assets/images/socials/Twitter.png',
        'assets/images/jumbo_img2.png',
        'assets/images/logo.png',
        'assets/images/self.jpg',
        'assets/images/self2.jpg'
    ];

    let imgLoaded = 0;

    for ( let i in toLoad ) {

        const myImg = document.createElement ('img');
        myImg.src = toLoad [i],
        myImg.width = 1;
        myImg.height = 1;

        myImg.addEventListener ('load', () => {
            console.log ('..');
            imgLoaded ++;
            document.getElementById ('pbar_progress').style.width = (imgLoaded/toLoad.length * 100) + '%';

            if ( imgLoaded >= toLoad.length ) showApp ();
        });

        
    }

}

function showApp () {

    document.getElementById('preloader_img').style.display = 'none';

    document.getElementById('app').style.display = 'block';
}

preloadImages();
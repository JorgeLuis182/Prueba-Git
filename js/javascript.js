/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function saludo() {
    // Swal.fire("Hola","Mundo","success");
    Swal.fire({
        title: 'Sweet!',
        text: 'Modal with a custom image.',
        imageUrl: 'https://cdn.pixabay.com/photo/2016/02/10/21/59/landscape-1192669__340.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image'
    });
    Swal.fire('Vámo a...','Darle!','info');
}

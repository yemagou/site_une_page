/*var âge =parseInt(prompt("vous avez quel âge ?"));
    if(âge<1)
    {
        alert("Valeur incorrect!");
            }else if(âge==1 || âge<=17){
                alert("Vous n'êtes pas encore majeur.");
                    }else if(âge==18 || âge<=49){
                        alert("Vous êtes majeur mais pas encore senior."); 
                            }else if(âge==50 || âge<=59){
                                alert("Vous êtes senior mais pas encore retraité."); 
                                    }else if(âge==60 || âge<=120){
                                        alert("Vous êtes retraité, profitez de votre temps libre !");
                                        }else{
                                            alert("vous n'avez pas entrez d'âge, veillez actualiser la page !!"); 
    }*/
    /*var number = 0;
    number++;
    alert(number); // Affiche : « 1 »
    number--;
    alert(number);*/
        /*function myFunction(arg) { 
            alert('Votre argument : ' + arg);
            }
            myFunction(prompt('Que souhaitez-vous passer en argument à la fonction ?'));*/
            /*var test = 'noir';
                (function()
                {
                    var test = 'blanc';
                    alert('Dans la zone isolée, la couleur est : ' + test);
                })();
                    alert('Dans la zone non-isolée, la couleur est : ' + test);*/

                  /*  const btns = document.querySelectorAll('.dev article');
                    const modaleEquipement = document.querySelector('.dev');
                    const fermeture = document.querySelector('.fermeture');                   
                    const imgIndex = document.querySelector('.dev img');
                    
                    
                    // fenetre model qui permet d'arrandir une image et le reduire 
                    btns.forEach(btn => {
                        btn.addEventListener( 'click', (e) => {
                    
                            imgIndex.src = `ressources/img${e.target.getAttribute('data-index')}-equip.jpg`;
                            modaleEquipement.classList.add('active-modale');
                    
                        })
                    })
                    fermeture.addEventListener('click', () => {
                        modaleEquipement.classList.remove('active-modale');
                    })
                   modaleEquipement.addEventListener('click', () => {
                        modaleEquipement.classList.remove('active-modale');
                    })*/
                    
                    
                    // Anim navbar
                    
                    const nav = document.querySelector('nav');
                    
                    window.addEventListener('scroll', () => {
                    
                        if(window.scrollY > 100) {
                            nav.classList.add('anim-nav');
                        } else {
                            nav.classList.remove('anim-nav');
                        }
                    
                    })
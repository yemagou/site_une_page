                    // Anim navbar
                    
                    const nav = document.querySelector('nav');
                    
                    window.addEventListener('scroll', () => {
                    
                        if(window.scrollY > 100) {
                            nav.classList.add('anim-nav');
                        } else {
                            nav.classList.remove('anim-nav');
                        }
                    
                    })

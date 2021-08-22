document.querySelectorAll('form').forEach( el => {
    
    el.addEventListener('submit', () => {
        
        document.querySelectorAll ('button, a, input[type="submit"]').forEach ( elw => {
          
            elw.disabled = true;
        
        });
    });

});
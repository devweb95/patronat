
        function openModal(projectId) {
            const modal = document.getElementById(projectId + 'Modal');
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(projectId) {
            const modal = document.getElementById(projectId + 'Modal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Fermer le modal en cliquant en dehors
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Fermer le modal avec la touche Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = document.querySelectorAll('.modal');
                modals.forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });

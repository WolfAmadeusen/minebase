        const headers = document.querySelectorAll('.accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', () => {
                const body = header.nextElementSibling;
                const svg = header.querySelector('svg');

                // Если открыт — закрыть
                if (body.style.maxHeight) {
                    body.style.maxHeight = null;
                    svg.classList.remove('rotate-180');
                } else {
                    // Закрыть все остальные
                    document.querySelectorAll('.accordion-body').forEach(b => b.style.maxHeight = null);
                    document.querySelectorAll('.accordion-header svg').forEach(s => s.classList.remove(
                        'rotate-180'));

                    // Открыть текущий
                    body.style.maxHeight = body.scrollHeight + 'px';
                    svg.classList.add('rotate-180');
                }
            });
        });
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: start;
        padding: 20px;
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }
    .input-control {
        width: 500px;
        height: 50px;
        margin-bottom: 10px;
        padding: 10px;
    }
    .color-box {
        width: 500px;
        height: 50px;
        margin-top: 10px;
    }
</style>
<div class="container">
    <input type="text" class="input-control" placeholder="Enter a color (e.g., blue)">
    <div class="boxes"></div>
    <script>
        document.querySelector('.input-control').addEventListener('input', function() {
            const boxes = document.querySelector('.boxes');
            const colorVal = this.value.toLowerCase();
            const colors = <?= json_encode($colors) ?>.filter(color => color.includes(colorVal));
            boxes.innerHTML = '';
            let limit = 5;
            let current = 1;
            colors.forEach(color => {
                if (current > limit) {
                    return;
                }
                const div = document.createElement('div');
                div.classList.add('color-box');
                div.style.backgroundColor = color;
                boxes.appendChild(div);
                current++;
            });
            if (colorVal === '') {
                boxes.innerHTML = '';
            }
        });
    </script>
</div>
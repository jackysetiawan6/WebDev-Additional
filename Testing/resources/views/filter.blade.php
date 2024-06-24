<style>
    .filter {
        position: absolute;
        top: 0;
        left: 0;
        height: 100vh;
        width: 300px;
        background-color: #f0f0f0;
        padding: 30px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
</style>
<form class="filter" action="">
    <h3>Filter Options</h3>
    <label>Category:</label>
    <select name="category" id="category">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
    <label>Color:</label>
    <label for="color-red">
        Red
        <input type="checkbox" name="red" id="color-red">
    </label>
    <label for="color-blue">
        Blue
        <input type="checkbox" name="blue" id="color-blue">
    </label>
    <label for="color-green">
        Green
        <input type="checkbox" name="green" id="color-green">
    </label>
    <button type="submit">Filter</button>
</form>
<script>
    const currentUrl = new URL(window.location.href);
    const params = currentUrl.searchParams;
    const category = params.get('category');
    const red = params.get('red');
    const blue = params.get('blue');
    const green = params.get('green');
    document.querySelector('#category').value = category;
    document.querySelector('#color-red').checked = red === 'true';
    document.querySelector('#color-blue').checked = blue === 'true';
    document.querySelector('#color-green').checked = green === 'true';
    // document.querySelector('.filter').addEventListener('change', function(event) {
    //     event.preventDefault();
    //     const category = document.querySelector('#category').value;
    //     const red = document.querySelector('#color-red').checked;
    //     const blue = document.querySelector('#color-blue').checked;
    //     const green = document.querySelector('#color-green').checked;
    //     const url = new URL(window.location.href);
    //     url.searchParams.set('category', category);
    //     url.searchParams.set('red', red);
    //     url.searchParams.set('blue', blue);
    //     url.searchParams.set('green', green);
    //     window.location.href = url.toString();
    // });
    document.querySelector('.filter').addEventListener('submit', function(event) {
        event.preventDefault();
        const category = document.querySelector('#category').value;
        const red = document.querySelector('#color-red').checked;
        const blue = document.querySelector('#color-blue').checked;
        const green = document.querySelector('#color-green').checked;
        const url = new URL(window.location.href);
        url.searchParams.set('category', category);
        url.searchParams.set('red', red);
        url.searchParams.set('blue', blue);
        url.searchParams.set('green', green);
        window.location.href = url.toString();
    });
</script>
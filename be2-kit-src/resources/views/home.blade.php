<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <main class="flex h-screen">
        <div class="w-1/2 overflow-y-auto border-r bg-white p-6">
            <h1 class="mb-4 text-2xl font-bold">Sản phẩm</h1>

            <ul>
                @foreach($products as $product)
                <li class="product-item cursor-pointer border-b p-3 hover:bg-gray-100" data-id="{{ $product->id }}">
                    {{ $product->name }}
                </li>
                @endforeach
            </ul>
        </div>

        <div id="product-detail" class="w-1/2 overflow-y-auto bg-white p-6">
            <p class="text-gray-500">Chọn sản phẩm bên trái</p>
        </div>
    </main>

    <script>
        const detail = document.getElementById('product-detail');
        const productItem = document.querySelectorAll('.product-item');

        productItem.forEach((e) => {
            e.addEventListener('click', async () => {

                productItem.forEach((item) => item.classList.remove('bg-gray-100', 'font-semibold'));
                e.classList.add('bg-gray-100', 'font-semibold');

                const response = await fetch(`/api/products/${e.dataset.id}`);
                const {data: product} = await response.json();

                detail.innerHTML = `
                    <h2 class="mb-2 text-2xl font-bold">${product.name}</h2>
                    <p class="mb-2 text-red-500">Giá: ${product.price} đ</p>${product.photo ? `<img class="mb-4 max-h-72 rounded object-cover" src="${product.photo}" alt="${product.name}">` : ''}
                    <div class="mb-4">${product.description ?? ''}</div>
                    <button onclick="like(${product.id})">
                       &#10084 <span id="like-count">${product.like} lượt thích</span>
                    </button>
                    <h3 class="mb-2 font-semibold">Bình luận</h3>
                    <div class="mb-4">
                        <input type="text" id="content" class="border p-2">
                        <button class="rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700" onclick="comment(${product.id})">Send</button>
                    </div>
                    <div class="comment-list rounded border p-4">
                        <ul>
                            ${product.comments.map((comment) => `<li class="rounded border p-2">${comment.content} ${comment.created_at}</li>`).join('')}
                        </ul>
                    </div>
                `;
            });
        });

        async function comment(id) {
            const contentInput = document.querySelector('#content');
            const commentList = document.querySelector('.comment-list');

            const response = await fetch(`/api/products/${id}/comments`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    content: contentInput.value
                })
            });

            const result = await response.json();

            commentList.innerHTML = `
                <ul>
                    ${result.data.map((comment) => `<li class="rounded border p-2">${comment.content} ${comment.created_at}</li>`).join('')}
                </ul>
            `;
            contentInput.value = '';
        }

        async function like(id) {
            const response = await fetch(`/api/products/${id}/like`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
            });

            const result = await response.json();
            document.querySelector('#like-count').textContent = result.data.like;
        }
    </script>
</body>

</html>

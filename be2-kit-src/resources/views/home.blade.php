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
                    <h3 class="mb-2 font-semibold">Bình luận</h3>
                    <ul class="list-disc pl-5">
                        ${product.comments.map((comment) => `<li class="mb-1">${comment.content} <br> Time: ${comment.created_at}</li>`).join('')}
                    </ul>
                `;
            });
        });
    </script>
</body>

</html>
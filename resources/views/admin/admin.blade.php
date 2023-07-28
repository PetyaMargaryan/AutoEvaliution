<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    @vite('resources/css/app.css')

</head>
<body>
<div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4 bg-black p-10">
            <p class="text-white font-extrabold text-3xl md:text-5xl">
                🚘 Auto<span class="text-[#ff0000]">e</span>volution
            </p>
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <form>
                <div class="flex">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <label for="products-search" class="sr-only">Search</label>
                        <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                            <input type="text" name="name" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for Cars">
                        </div>
                    </div>
                    <div class="flex items-center mb-4 sm:mb-0">
                        <select id="countries" class="ml-5 mt-1 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach($brands as $brand)
                                <option value="{{ $brand }}">{{ $brand }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
            <button id="createProductButton" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">
                Add new car
            </button>
        </div>
    </div>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="align-middle inline-block min-w-full">
            <div class="shadow overflow-hidden">
                <table class="table-fixed min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox"
                                       class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                                <label for="checkbox-all" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                            Name
                        </th>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                            Brand
                        </th>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                            Year
                        </th>
                        <th scope="col" class="p-4">
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($cars as $car)
                        <tr class="hover:bg-gray-100">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-" aria-describedby="checkbox-1" type="checkbox"
                                           class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                                    <label for="checkbox-" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                                <img class="h-10 w-10 rounded-full" src="{{ $car->image }}" alt=" avatar">
                                <div class="text-sm font-normal text-gray-500">
                                    <div class="text-sm font-normal text-gray-500">{{ $car->name }}</div>
                                </div>
                            </td>
                            <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">{{ $car->brand }}</td>
                            <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900">{{ $car->year }}</td>
                            <td class="p-4 whitespace-nowrap space-x-2">
                                <button type="button" data-modal-toggle="user-modal"
                                        class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd"
                                              d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    Edit
                                </button>
                                <button type="button" data-modal-toggle="delete-user-modal"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                                    <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Product Drawer -->
<div id="drawer-create-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-[50vw] border p-4 overflow-y-auto transition-transform hidden bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" >
    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Car</h5>
    <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white closeCreateProduct">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="{{ route('admin.add') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Name" required="">
            </div>

            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                <input type="number" name="year" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="xxxx" required="">
            </div>
            <div>
                <label for="category-create" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                <select id="category-create" name="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand }}">{{ $brand }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="small-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small Description</label>
                <textarea id="small-description" name="small_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
            </div>
            <div class="w-full md:w-1/2 p-5 pb-0 flex flex-col flex-grow flex-shrink">
                <img src="{{ asset('/images/no-image.jpg') }}"
                     class="h-full w-full rounded-t select-image" data-name="main-image">
            </div>
            <div class="flex flex-wrap justify-between pt-5">
                <div class="w-full md:w-1/2 p-5 flex flex-col flex-grow flex-shrink">
                    <img src="{{ asset('/images/no-image.jpg') }}"
                         class="h-full w-full rounded-t select-image" data-name="small-image-1">
                </div>
                <div class="w-full md:w-1/2 p-5 flex flex-col flex-grow flex-shrink">
                    <img src="{{ asset('/images/no-image.jpg') }}"
                         class="h-full w-full rounded-t select-image" data-name="small-image-2">
                </div>
            </div>
            <div class="invisible">
                <input class="image-file" id="main-image" type="file" name="main-image">
                <input class="image-file" id="small-image-1" type="file" name="small-image-1">
                <input class="image-file" id="small-image-2" type="file" name="small-image-2">
            </div>

            <button type="submit" class="text-white w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                Add product
            </button>
            <button type="button" data-drawer-dismiss="drawer-create-product-default" aria-controls="drawer-create-product-default"
                    class="inline-flex w-full justify-center text-gray-500 items-center bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border mb-12
                        border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600
                        dark:focus:ring-gray-600 closeCreateProduct">
                <svg aria-hidden="true" class="w-5 h-5 -ml-1 sm:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                Cancel
            </button>
        </div>
    </form>
</div>

<script>
    $('#createProductButton').click(function () {
        $('#drawer-create-product-default').show()
    })

    $('.closeCreateProduct').click(function () {
        $('#drawer-create-product-default').hide()
    })

    $('.closeCreateProduct').click(function () {
        console.log(5555)
    })


    $('.select-image').click(function () {
        const name = $(this).attr('data-name');
        $('#' + name).click()
    })

    $('.image-file').change(function () {
        const name = $(this).attr('name');

        const reader = new FileReader();
        reader.readAsDataURL($(this)[0].files[0]);
        reader.onload = function () {
            $('.select-image[data-name="' + name + '"]').attr('src', reader.result)
        };
    })
</script>
</body>
</html>

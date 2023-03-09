<!DOCTYPE html>
<html>
<head>
    <title>form to PDF </title>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 px-4 py-8 sm:px-6 md:py-12 lg:px-8 xl:py-16">
<div>
  <div class="max-w-md mx-auto">
    <h2 class="text-center text-2xl font-extrabold text-gray-900">Enter Your Information student</h2>
    <form class="mt-8" action="./generate-pdf.php" method="post">
      <div class="grid grid-cols-1 gap-6">
        <div>
          <label for="fullname" class="block pb-2 text-sm font-medium text-gray-700">Full Name</label>
          <div class="relative rounded-md shadow-sm">
            <input type="text" id="fullname" name="fullname" placeholder="  Yassine benmansour" class="rounded-md form-input block w-full sm:text-sm sm:leading-5 transition duration-150 ease-in-out sm:pr-10 sm:py-2 ">
          </div>
        </div>
        <div>
          <label for="address" class="block pb-2 text-sm font-medium text-gray-700">Address</label>
          <div class="relative rounded-md shadow-sm">
            <input type="text" id="address" name="address" placeholder=" 123 Main St" class="rounded-md form-input block w-full sm:text-sm sm:leading-5 transition duration-150 ease-in-out sm:pr-10 sm:py-2">
          </div>
        </div>
        <div>
          <label for="phone" class="block pb-2 text-sm font-medium text-gray-700">Phone</label>
          <div class="relative rounded-md shadow-sm">
            <input type="text" id="phone" name="phone" placeholder=" (212) 456-7890" class=" rounded-md form-input block w-full sm:text-sm sm:leading-5 transition duration-150 ease-in-out sm:pr-10 sm:py-2">
          </div>
        </div>
        <div>
          <label for="codeProduct" class="block pb-2 text-sm font-medium text-gray-700">Massar Code</label>
          <div class="relative rounded-md shadow-sm">
            <input type="text" id="codeProduct" name="codeMassar" placeholder="  J192728911" class="rounded-md form-input block w-full sm:text-sm sm:leading-5 transition duration-150 ease-in-out sm:pr-10 sm:py-2">
          </div>
        </div>
        <div>
          <label for="quantity" class="block pb-2 text-sm font-medium text-gray-700">Moyenne</label>
          <div class="relative rounded-md shadow-sm">
            <input type="number" id="quantity" name="moy" placeholder="  18/20" class=" rounded-md form-input block w-full sm:text-sm sm:leading-5 transition duration-150 ease-in-out sm:pr-10 sm:py-2">
          </div>
        </div>
        <div class="flex justify-center">
          <input type="submit" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray transition duration-150 ease-in-out sm:leading-5 sm:px-8">
            
</input>
          <input type="reset" class="ml-4 inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base leading-6 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out sm:leading-5 sm:px-8">
        
</input>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
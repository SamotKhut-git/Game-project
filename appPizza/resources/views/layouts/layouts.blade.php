<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizza App</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<Heade>  <!-- header imgae for page -->
		<div class="bg-slate-500 h-16 text-amber-400 text-[30px]">
			<nav class="container mx-auto">
			<div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
				<a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
					<img class="rounded-full w-10" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi_zb1-rU1I2js4DgKv0K45KoUlplf5M166Q&usqp=CAU" class="h-8" alt="Logo" />
					<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PizzaHouse</span>
				</a>
				<div class="flex items-center space-x-6 rtl:space-x-reverse">
					<a href="#" class="font-bold text-2xl text-gray-500 dark:text-white hover:underline">Login</a>
					<a href="#" class=" font-bold text-2xl text-blue-600 dark:text-white hover:underline">Signup</a>
				</div>
			</div>
		</nav>
		</div>	
		<div class="flex justify-center mt-5">
			<img class="w-[150px] rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi_zb1-rU1I2js4DgKv0K45KoUlplf5M166Q&usqp=CAU" alt="pizza logo">
		</div>
			<div class="uppercase text-center text-[50px] font-bold text-amber-500">
				pizza house
			</div>
	</Header>
	<div class="mx-[10%]">
		<!-- yield the body section from Add.blade.php -->
		@yield('container') 
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-3xl">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Admin Registration</h2>

        <!-- ✅ Progress Indicator (Now Dynamic) -->
        <div class="flex justify-center mb-6">
    <div class="flex items-center space-x-4">
        <div id="step-circle-1" class="step w-8 h-8 rounded-full flex items-center justify-center text-white bg-blue-500 font-bold">1</div>
        <div id="step-line-1" class="h-1 w-12 bg-gray-300"></div>
        <div id="step-circle-2" class="step w-8 h-8 rounded-full flex items-center justify-center text-white bg-gray-300 font-bold">2</div>
        <div id="step-line-2" class="h-1 w-12 bg-gray-300"></div>
        <div id="step-circle-3" class="step w-8 h-8 rounded-full flex items-center justify-center text-white bg-gray-300 font-bold">3</div>
    </div>
</div>


        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  

            <!-- Step 1: Basic User Details -->
            <div class="step-content" id="step-1">
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Admin Name</label>
                        <input type="text" name="admin_name" required class="w-full border border-gray-400 p-3 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Email</label>
                        <input type="email" name="email" required class="w-full border border-gray-400 p-3 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Password</label>
                        <input type="password" name="password" required class="w-full border border-gray-400 p-3 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none">
                    </div>
                </div>
                <div class="mt-6 text-right">
                    <button type="button" onclick="nextStep(2)" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-500">Next</button>
                </div>
            </div>

            <!-- Step 2: Hotel Details -->
            <div class="step-content hidden" id="step-2">
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Hotel Name</label>
                        <input type="text" name="hotel_name" required class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Owner Name</label>
                        <input type="text" name="owner_name" required class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Establishment Date</label>
                        <input type="date" name="establishment_date" required class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Legally Registered</label>
                        <div class="flex items-center space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="legally_registered" value="yes" required class="mr-2"> Yes
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="legally_registered" value="no" required class="mr-2"> No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" onclick="prevStep(1)" class="bg-gray-400 text-white py-2 px-6 rounded-lg hover:bg-gray-500">Previous</button>
                    <button type="button" onclick="nextStep(3)" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-500">Next</button>
                </div>
            </div>

            <!-- Step 3: Additional Hotel Details -->
            <div class="step-content hidden" id="step-3">
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium">Hotel Logo</label>
                        <input type="file" name="hotel_image" class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Hotel Pictures</label>
                        <input type="file" name="hotel_pictures[]" multiple class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Hotel Website</label>
                        <input type="url" name="hotel_website" class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Contact Number</label>
                        <input type="text" name="contact_number" required class="w-full border border-gray-400 p-3 rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium">Select a Plan</label>
                        <select name="plan" required class="w-full border border-gray-400 p-3 rounded-lg">
                            <option value="basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 flex justify-between">
                    <button type="button" onclick="prevStep(2)" class="bg-gray-400 text-white py-2 px-6 rounded-lg hover:bg-gray-500">Previous</button>
                    <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-500">Register</button>
                </div>
            </div>

        </form>
    </div>

    <!-- ✅ JavaScript for Dynamic Step Navigation & Progress Indicator -->
    <script>
    function updateStepIndicator(step) {
        // Reset all step indicators to gray
        for (let i = 1; i <= 3; i++) {
            document.getElementById(`step-circle-${i}`).classList.remove('bg-blue-500');
            document.getElementById(`step-circle-${i}`).classList.add('bg-gray-300');
            
            if (i < 3) { 
                document.getElementById(`step-line-${i}`).classList.remove('bg-blue-500');
                document.getElementById(`step-line-${i}`).classList.add('bg-gray-300');
            }
        }

        // Update current and previous steps to blue
        for (let i = 1; i <= step; i++) {
            document.getElementById(`step-circle-${i}`).classList.remove('bg-gray-300');
            document.getElementById(`step-circle-${i}`).classList.add('bg-blue-500');
            
            if (i < step) { 
                document.getElementById(`step-line-${i}`).classList.remove('bg-gray-300');
                document.getElementById(`step-line-${i}`).classList.add('bg-blue-500');
            }
        }
    }

    function nextStep(step) {
        document.querySelectorAll('.step-content').forEach(div => div.classList.add('hidden'));
        document.getElementById(`step-${step}`).classList.remove('hidden');
        updateStepIndicator(step);
    }

    function prevStep(step) {
        document.querySelectorAll('.step-content').forEach(div => div.classList.add('hidden'));
        document.getElementById(`step-${step}`).classList.remove('hidden');
        updateStepIndicator(step);
    }
</script>



</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Send Report</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="w-full flex justify-center items-center h-[100vh]">
        <form action="form-submit" method="POST"
            class="w-full max-w-5xl mx-auto p-6 bg-white shadow-lg rounded-2xl space-y-6 border border-blue-500">
            @csrf
            <h2 class="text-2xl font-semibold text-blue-500 text-center">Send Report</h2>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="w-full md:w-1/2 space-y-4">
                    <div>
                        <label for="name" class="block mb-1 font-medium text-gray-700">
                            Enter Employee Name
                        </label>
                        <input type="text" id="name" name="name"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Your name" required />
                    </div>
                    <div>
                        <label for="report_type" class="block mb-1 font-medium text-gray-700">
                            Report Type
                        </label>
                        <select id="report_type" name="report_type"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="" disabled>-- Select report type --</option>
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                    <div class="md:block hidden">
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 cursor-pointer">
                            Send
                        </button>
                    </div>
                </div>
                <div class="w-full">
                    <label for="message" class="block mb-1 font-medium text-gray-700">
                        Description
                    </label>
                    <textarea id="message" name="message" rows="13"
                        class="w-full border border-gray-300 rounded-lg p-2 resize-y-none focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Write your report description..."></textarea>
                </div>
            </div>
            <div class="w-full md:hidden inline-block">
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200 cursor-pointer">
                    Send
                </button>
            </div>
        </form>
    </div>
</body>

</html>

#!/bin/bash

echo "🚀 Tailwind CSS Local Setup for PHP Projects (Ubuntu/Linux)"
echo "-------------------------------------------------------------"

# 1. Check Node.js and npm
if ! command -v node &> /dev/null || ! command -v npm &> /dev/null
then
    echo "❌ Node.js or npm is not installed."
    read -p "Do you want to install them now? (y/n): " install_node
    if [[ $install_node == "y" ]]; then
        sudo apt update && sudo apt install nodejs npm -y
    else
        echo "⛔ Cannot continue without Node.js and npm."
        exit 1
    fi
fi

# 2. Ask for project directory
read -p "📁 Enter the folder where you want to install Tailwind (default: ./): " folder
folder=${folder:-"./"}

cd "$folder" || { echo "❌ Folder not found."; exit 1; }

echo "📦 Setting up Tailwind in: $folder"

# 3. Initialize npm project
npm init -y >/dev/null 2>&1

# 4. Install Tailwind CSS
npm install -D tailwindcss >/dev/null 2>&1
npx tailwindcss init >/dev/null 2>&1

# 5. Update Browserslist (to avoid warnings)
npx update-browserslist-db@latest >/dev/null 2>&1

# 6. Configure tailwind.config.js
cat > tailwind.config.js <<EOL
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
}
EOL

# 7. Create folders and base input.css
mkdir -p src dist
cat > src/input.css <<EOL
@tailwind base;
@tailwind components;
@tailwind utilities;
EOL

# 8. Build initial CSS
npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify >/dev/null 2>&1

echo "✅ Tailwind has been successfully set up!"
echo "📄 Generated CSS file: dist/output.css"
echo
echo "💡 Add this line inside your PHP pages in the <head> section:"
echo "<link rel='stylesheet' href='dist/output.css'>"
echo
echo "👀 Do you want to start Tailwind in watch mode (auto build)?"
read -p "(y/n): " watch_answer

if [[ $watch_answer == "y" ]]; then
    echo "🔄 Starting Tailwind in watch mode..."
    npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
else
    echo "👌 You can manually run this command later:"
    echo "npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch"
fi

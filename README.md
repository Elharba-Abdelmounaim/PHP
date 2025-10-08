# 🧩 Tailwind CSS Local Setup & Usage Guide

This guide explains how to **use Tailwind CSS locally (offline)** in your PHP or HTML project.  
It also covers the most useful classes such as **colors, backgrounds, text, size, width, height**, and more.

---

## ⚙️ Requirements

Before you start, make sure you have:

- **Node.js** and **npm** installed  
- A working **Tailwind CSS setup** (via `setup-tailwind.sh` or manual configuration)  
- A local project structure similar to:
```
/project/
│
├── login.php
├── register.php
├── welcome.php
├── users.txt
├── src/
│ └── input.css
├── dist/
│ └── output.css
└── tailwind.config.js
```

---

## 🚀 Build Commands

Run these commands from your project root:

```bash
# Initial build (creates dist/output.css)
npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify

# Watch mode (automatically rebuilds when files change)
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
```
---
### Tailwind CSS Basics

Tailwind is a utility-first CSS framework, meaning you style elements by combining small class names that each do one thing.
Example:

```
<button class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
```


🧱 Common Classes Overview
1. 🎨 Colors

---
Use text-{color}-{shade} or bg-{color}-{shade}
---
```
<p class="text-red-500">Red text</p>
<p class="text-green-600">Green text</p>
<p class="bg-blue-100 p-4">Light blue background</p>
<p class="bg-gray-800 text-white p-4">Dark gray background with white text</p>
```

2. 🧍 Text Sizes

Use text-{size} to change font size:

```
<h1 class="text-3xl font-bold">Large Title</h1>
<p class="text-sm">Small paragraph</p>
```


Available sizes:
xs, sm, base, lg, xl, 2xl, 3xl, 4xl, 5xl, ...


3. 📏 Width & Height

Use w-{size} and h-{size}

```
<div class="w-64 h-32 bg-green-200">Box (width: 16rem, height: 8rem)</div>
<div class="w-full h-screen bg-yellow-100">Full width and height</div>
```


4. 📦 Spacing (Padding & Margin)

Control spacing with p-*, m-*, or directional variants:

```

<div class="p-4 m-4 bg-white">Padding & margin</div>
<div class="space-y-4">
  <p>Element 1</p>
  <p>Element 2</p>
</div>

```



Class	Description
p-4	Padding 1rem
px-2	Horizontal padding
mt-4	Margin top
space-y-4	Vertical spacing between child elements

5. 🔲 Layout & Alignment (Flexbox)

Use flex utilities for centering or alignment:

```

<div class="flex items-center justify-center h-64 bg-blue-50">
  <div class="bg-white p-6 rounded shadow">Centered content</div>
</div>

```

Class	Meaning
flex	Enables flexbox layout
items-center	Center vertically
justify-center	Center horizontally
flex-col	Stack elements vertically
6. 🟣 Rounded Corners & Shadows

```
<div class="bg-white rounded-2xl shadow-lg p-6">
  Rounded card with shadow
</div>
```


Class	Description
rounded	Small radius
rounded-lg, rounded-2xl	Larger radius
shadow, shadow-md, shadow-lg	Adds elevation effect
7. ⚪ White Text

Used for dark backgrounds:

```

<button class="bg-blue-600 text-white px-4 py-2 rounded">
  Submit
</button>
```



🏁 Example Command Summary
# Setup Tailwind (if not yet done)
```
npm init -y
npm install -D tailwindcss
npx tailwindcss init
```

# Build CSS
```

npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
```


Author: Abdelmounaim Elharba
Purpose: Educational exercise (Authentication system + Tailwind CSS UI)


---

Would you like me to extend this `README.md` with a **section about how to install Tailwind offline (without npm)** too, for completely offline environments?

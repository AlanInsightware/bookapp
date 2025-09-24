# Frontend Layout System

This bookapp uses a modular layout system with three main layout components for different page types.

## Available Layouts

### 1. Hero Layout (`frontend.hero`)
**File:** `resources/views/components/layouts/frontend/hero.blade.php`
**Use for:** Landing pages, welcome screens, promotional pages

**Features:**
- Full-screen centered content
- Navigation bar
- Perfect for hero sections and landing content

**Example Usage:**
```blade
<x-layouts.frontend.hero 
    title="Welcome to BookStore"
    description="Your trusted source for books, knowledge, and literary adventures."
>
    <!-- Your hero content here -->
</x-layouts.frontend.hero>
```

### 2. Page Layout (`frontend.page`)
**File:** `resources/views/components/layouts/frontend/page.blade.php`
**Use for:** Content pages, catalog pages, general site pages

**Features:**
- Navigation bar
- Optional breadcrumbs
- Optional page header
- Main content area
- Default footer with book store branding
- Structured layout with proper spacing

**Example Usage:**
```blade
<x-layouts.frontend.page 
    title="All Books"
    description="Browse our complete collection of books."
>
    <x-slot name="breadcrumbs">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{ route('home') }}" icon="home">Home</flux:breadcrumbs.item>
            <flux:breadcrumbs.item>Books</flux:breadcrumbs.item>
        </flux:breadcrumbs>
    </x-slot>

    <x-slot name="pageHeader">
        <h1>Page Title</h1>
    </x-slot>

    <!-- Main content -->
</x-layouts.frontend.page>
```

### 3. App Layout (`frontend.app`)
**File:** `resources/views/components/layouts/frontend/app.blade.php`
**Use for:** General-purpose layout, flexible content

**Features:**
- Navigation bar
- Optional header slot
- Main content area
- Optional footer slot
- Most flexible option

**Example Usage:**
```blade
<x-layouts.frontend.app title="Custom Page">
    <x-slot name="header">
        <!-- Custom header content -->
    </x-slot>

    <!-- Main content -->

    <x-slot name="footer">
        <!-- Custom footer content -->
    </x-slot>
</x-layouts.frontend.app>
```

## Available Slots

### Common to All Layouts
- `title` - Page title (appears in browser tab)
- `description` - Meta description for SEO
- `head` - Additional head content (CSS, meta tags, etc.)
- `scripts` - Additional scripts before closing body tag

### Page Layout Specific
- `breadcrumbs` - Breadcrumb navigation
- `pageHeader` - Page header content
- `footer` - Custom footer (overrides default)

### App Layout Specific
- `header` - Custom header content
- `footer` - Custom footer content

## Navigation Component

The navigation is automatically included in all layouts:
**File:** `app/Livewire/Frontend/Navigation.php`
**View:** `resources/views/livewire/frontend/navigation.blade.php`

**Features:**
- Responsive design (desktop + mobile)
- Authentication-aware
- Dark mode toggle
- Search functionality
- User dropdown when authenticated

## Color System

The app uses a book-themed color palette:
- **Primary**: Deep literary blue (`#1e3a5f`)
- **Secondary**: Warm parchment (`#d4a574`)
- **Tertiary**: Rich leather brown (`#8b4513`)

Custom utilities available:
- `.bg-primary`, `.text-primary`, `.border-primary`
- `.bg-secondary`, `.text-secondary`, `.border-secondary`
- `.bg-tertiary`, `.text-tertiary`, `.border-tertiary`

## Examples

- **Welcome Page**: Uses `hero` layout - `resources/views/welcome.blade.php`
- **Books Index**: Uses `page` layout - `resources/views/books/index.blade.php`

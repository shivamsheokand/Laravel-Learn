<nav style="background-color: #333; padding: 10px 20px; border-radius: 8px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <!-- Logo or Brand Name -->
        <a href="/" style="color: white; font-size: 24px; font-weight: bold; text-decoration: none;">
            {{$title}}
        </a>

        <!-- Navigation Links -->
        <ul style="list-style: none; display: flex; margin: 0; padding: 0;">
            <li style="margin-left: 20px;">
                <a href="/" style="color: white; text-decoration: none; font-size: 16px;">Home</a>
            </li>
            <li style="margin-left: 20px;">
                <a href="/about" style="color: white; text-decoration: none; font-size: 16px;">About</a>
            </li>
            <li style="margin-left: 20px;">
                <a href="/services" style="color: white; text-decoration: none; font-size: 16px;">Services</a>
            </li>
            <li style="margin-left: 20px;">
                <a href="/contact" style="color: white; text-decoration: none; font-size: 16px;">Contact</a>
            </li>
        </ul>

        <!-- Optional: Search bar or other items -->
        <div>
            <a href="/addimg" style="color: white; text-decoration: none; font-size: 16px; margin-left: 20px;">
                Add Image
            </a>
        </div>
    </div>
</nav>

<style>
    @media (max-width: 768px) {
        nav div {
            flex-direction: column;
            align-items: flex-start;
        }

        ul {
            width: 100%;
            padding-left: 0;
            flex-direction: column;
            align-items: flex-start;
            margin-top: 10px;
        }

        ul li {
            margin-left: 0;
            margin-top: 10px;
        }

        ul li a {
            padding: 8px 0;
            width: 100%;
            text-align: left;
        }
    }
</style>

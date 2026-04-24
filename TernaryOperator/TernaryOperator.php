<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Web Developer',
        'description' => 'Build and maintain modern websites',
        'salary' => 40000,
        'location' => 'Manila, Philippines',
        'tags' => []
    ],
    [
        'id' => 2,
        'title' => 'UI/UX Designer',
        'description' => 'Design clean and user-friendly interfaces',
        'salary' => 35000,
        'location' => 'Cebu City, Philippines',
        'tags' => ['Figma', 'UX', 'UI']
    ],
    [
        'id' => 3,
        'title' => 'Data Analyst',
        'description' => 'Analyze and interpret complex data sets',
        'salary' => 45000,
        'location' => 'Davao City, Philippines',
        'tags' => ['SQL', 'Python', 'Excel']
    ],
    [
        'id' => 4,
        'title' => 'DevOps Engineer',
        'description' => 'Manage and optimize deployment pipelines',
        'salary' => 50000,
        'location' => 'Quezon City, Philippines',
        'tags' => ['Docker', 'CI/CD', 'AWS']
    ],
    [
        'id' => 5,
        'title' => 'Backend Developer',
        'description' => 'Develop and maintain server-side logic',
        'salary' => 48000,
        'location' => 'Baguio City, Philippines',
        'tags' => ['PHP', 'Node.js', 'MySQL']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listings (TERNARY OPERATOR)</title>
</head>

<body class="bg-blue-50">

<header class="bg-blue-600 text-white p-4 shadow-sm">
    <h1 class="text-xl font-semibold">Job Listings (TERNARY OPERATOR)</h1>
</header>

<div class="max-w-3xl mx-auto p-4">

    <?php foreach ($listings as $index): ?>

        <div class="mb-4">
            <div
                class="
                <?= $index['id'] % 2 === 0
                    ? 'bg-white'
                    : 'bg-blue-100'
                ?>
                border border-blue-200 rounded-lg p-4">

                <!-- JOB TITLE -->
                <h2 class="text-lg font-semibold text-blue-800">
                    <?= $index['title'] ?>
                </h2>

                <!-- JOB DESCRIPTION -->
                <p class="text-gray-600 text-sm mt-1">
                    <?= $index['description'] ?>
                </p>

                <ul class="mt-3 text-sm text-gray-700 space-y-1">

                    <!-- SALARY -->
                    <li>
                        <strong>Salary:</strong>
                        <?= '₱' . number_format($index['salary']) ?>

                        <?=
                            $index['salary'] >= 50000
                                ? '<span class="ml-2 text-xs text-red-600">Senior</span>'
                                : ($index['salary'] >= 45000
                                    ? '<span class="ml-2 text-xs text-yellow-600">Mid</span>'
                                    : '<span class="ml-2 text-xs text-gray-500">Junior</span>'
                                )
                        ?>
                    </li>

                    <!-- LOCATION -->
                    <li>
                        <strong>Location:</strong>
                        <?= $index['location'] ?>

                        <?=
                            $index['location'] === 'Bahay ni Nestor'
                                ? '<span class="ml-2 text-xs text-blue-600">Remote</span>'
                                : '<span class="ml-2 text-xs text-green-600">On-site</span>'
                        ?>
                    </li>

                    <!-- TAGS -->
                    <li>
                        <?=
                            !empty($index['tags'])
                                ? '<strong>Tags:</strong> ' . implode(', ', $index['tags'])
                                : '<span class="text-gray-400 italic">No tags</span>'
                        ?>
                    </li>

                </ul>

            </div>
        </div>

    <?php endforeach; ?>

</div>

</body>
</html>
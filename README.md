# Task_management.
This is a simple web application for managing tasks. It allows users to create, view, edit, and delete tasks. Additionally, users can filter tasks based on their created dates.

## Setup Instructions![Screenshot (368)](https://github.com/Ashirbadparida15/Task_management/assets/90901326/24e74b3e-2090-4ea4-b841-12b1cd249f30)
![Screenshot (369)](https://github.com/Ashirbadparida15/Task_management/assets/90901326/16923db3-04de-4757-bd4f-a9e53638a85f)
![Screenshot (370)](https://github.com/Ashirbadparida15/Task_management/assets/90901326/3f6c18b3-309e-4a34-8f95-8becee8bd591)
![Screenshot (371)](https://github.com/Ashirbadparida15/Task_management/assets/90901326/88fda9ee-f035-4979-9618-d2d02636e5d8)

1. Clone the repository:
2.  ## Set Up Environment:
- Rename `.env.example` to `.env` and update database Name if you did not give proper name it can be taken defauld i.e Laravel.
- ## Run Migrations:
- php artisan migrate : this comand run the migration whic is necessary to and some defauld table which is available in migration file .
- ## Serve the Application:
- php artisan serve:run the prioject and it run in default http://127.0.0.1:8000/ port
- ### Backend
-  Implemented CRUD operations using resource controllers for tasks.
- Utilized Eloquent ORM for database interactions.
- Implemented soft deletes for tasks to mark tasks as deleted without permanently removing them from the database it just update the status of delet in data base.
## Used HTML, CSS, and Blade for frontend views.
- Styled using simple CSS for a clean and user-friendly interface.
- Implemented a date filter feature to allow users to filter tasks based on due dates.
- ## Validation
-   successfully  Implemented client-side validation to ensure that task titles are mandatory and have a maximum character limit of 100 characters.
·     Show appropriate error messages if the validation fails.
## Additional Notes
- The application follows the MVC (Model-View-Controller) architectural pattern for better organization and separation of concerns.
- TaskController handles the logic for managing tasks, while corresponding views are stored in the `resources/views/tasks` directory.
- Date filtering is implemented to enhance user experience by allowing users to focus on tasks within a specific date range.
- The application provides a simple and intuitive interface for managing tasks, suitable for small-scale task management needs.

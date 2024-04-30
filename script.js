document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
       
    });

    calendar.render();
});

class TaskManager {
    constructor() {
        this.tasks = [];
        this.taskInput = document.getElementById('task-input');
        this.descriptionInput = document.getElementById('description-input');
        this.addButton = document.getElementById('add-button');
        this.taskList = document.getElementById('task-list');
        this.categorySelect = document.getElementById('category-select')

        this.init();
    }

    init() {
        this.addButton.addEventListener('click', () => this.addTask());
    }

    addTask() {
        const task = this.taskInput.value.trim();
        const description = this.descriptionInput.value.trim();
        const category = this.categorySelect.value.trim();
    
        if (task !== '') {
            // Rechercher si la catégorie existe déjà
            const existingCategoryIndex = this.tasks.findIndex(item => item.category === category);
            
            if (existingCategoryIndex !== -1) {
                // Ajouter la tâche à la catégorie existante
                this.tasks[existingCategoryIndex].tasks.push({ task, description, completed: false });
            } else {
                // Créer une nouvelle catégorie et y ajouter la tâche
                this.tasks.push({ category, tasks: [{ task, description, completed: false }] });
            }
    
            this.renderTasks();
            this.taskInput.value = '';
            this.descriptionInput.value = '';
        }
    }

    toggleTask(categoryIndex, taskIndex) {
        this.tasks[categoryIndex].tasks[taskIndex].completed = !this.tasks[categoryIndex].tasks[taskIndex].completed;
        this.renderTasks();
    }


    renderTasks() {
        this.taskList.innerHTML = '';
    
        this.tasks.forEach((categoryItem, categoryIndex) => {
            const categoryContainer = document.createElement('div'); // Créer un conteneur pour la catégorie
            categoryContainer.classList.add('category-container'); // Ajouter la classe CSS pour le cadre de la catégorie
            const categoryHeader = document.createElement('h3'); // Créer un élément h3 pour la catégorie
            categoryHeader.textContent = categoryItem.category; // Définir le texte de l'élément h3 comme étant la catégorie
            categoryContainer.appendChild(categoryHeader); // Ajouter l'élément h3 de la catégorie dans le conteneur
            
            categoryItem.tasks.forEach((task, taskIndex) => {
                const taskItem = document.createElement('li'); // Créer un élément li pour la tâche
                taskItem.textContent = `${task.task} - ${task.description}`;
                if (task.completed) {
                    taskItem.classList.add('completed');
                }
                taskItem.addEventListener('click', () => this.toggleTask(categoryIndex, taskIndex));
    
                categoryContainer.appendChild(taskItem); // Ajouter l'élément li de la tâche dans le conteneur
            });
    
            this.taskList.appendChild(categoryContainer); // Ajouter le conteneur de catégorie à la liste des tâches
        });
    }

}

const taskManager = new TaskManager();




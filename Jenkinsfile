pipeline {
    agent any

    stages {
        stage('Setup') {
            steps {
                bat 'git config --global --add safe.directory C:/xampp/htdocs/euro'
            }
        }

        stage('Pull Code') {
            steps {
                bat 'git pull origin main'
            }
        }

        stage('Install') {
            steps {
                bat 'composer install --no-interaction --prefer-dist'
            }
        }

        // ✅ ADD THIS STAGE
        stage('Environment Setup') {
            steps {
                bat 'php artisan key:generate'
                bat 'php artisan config:clear'
                bat 'php artisan cache:clear'
            }
        }

        stage('Migrate') {
            steps {
                bat 'php artisan migrate --force'
            }
        }

        stage('Test') {
            steps {
                bat 'php artisan test'
            }
        }
    }
}
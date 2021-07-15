<?php

return [
    'userManagement' => [
        'title'          => 'Ajustes',
        'title_singular' => 'Ajustes',
    ],
    'permission' => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Titulo',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Titulo',
            'title_helper'       => ' ',
            'permissions'        => 'Permisos',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nombre',
            'name_helper'              => ' ',
            'email'                    => 'Correo Electrónico',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Correo Verificado en',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Contraseña',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'course' => [
        'title'          => 'Cursos',
        'title_singular' => 'Curso',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'teacher'             => 'Docente',
            'teacher_helper'      => ' ',
            'title'               => 'Titulo',
            'title_helper'        => ' ',
            'description'         => 'Descripción',
            'description_helper'  => ' ',
            'price'               => 'Precio',
            'price_helper'        => ' ',
            'thumbnail'           => 'Miniatura',
            'thumbnail_helper'    => ' ',
            'is_published'        => 'Está Publicado',
            'is_published_helper' => ' ',
            'students'            => 'Estudiantes',
            'students_helper'     => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'lesson' => [
        'title'          => 'Lecciones',
        'title_singular' => 'Leccione',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Curso',
            'course_helper'       => ' ',
            'title'               => 'Titulo',
            'title_helper'        => ' ',
            'thumbnail'           => 'Miniatura',
            'thumbnail_helper'    => ' ',
            'short_text'          => 'Texto Corto',
            'short_text_helper'   => ' ',
            'long_text'           => 'Texto Largo',
            'long_text_helper'    => ' ',
            'video'               => 'Video',
            'video_helper'        => ' ',
            'position'            => 'Posición',
            'position_helper'     => ' ',
            'is_published'        => 'Está publicado',
            'is_published_helper' => ' ',
            'is_free'             => 'Es Gratis',
            'is_free_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'test' => [
        'title'          => 'Exámenes',
        'title_singular' => 'Exámene',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'course'              => 'Curso',
            'course_helper'       => ' ',
            'lesson'              => 'Lección',
            'lesson_helper'       => ' ',
            'title'               => 'Titulo',
            'title_helper'        => ' ',
            'description'         => 'Descripción',
            'description_helper'  => ' ',
            'is_published'        => 'Está publicado',
            'is_published_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Preguntas',
        'title_singular' => 'Pregunta',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'test'                  => 'Examen',
            'test_helper'           => ' ',
            'question_text'         => 'Texto de la pregunta',
            'question_text_helper'  => ' ',
            'question_image'        => 'Imagen de la pregunta',
            'question_image_helper' => ' ',
            'points'                => 'Puntos',
            'points_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'questionOption' => [
        'title'          => 'Opciones de preguntas',
        'title_singular' => 'Opciones de pregunta',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'question'           => 'Pregunta',
            'question_helper'    => ' ',
            'option_text'        => 'Texto de opción',
            'option_text_helper' => ' ',
            'is_correct'         => 'Es correcta',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'testResult' => [
        'title'          => 'Resultados del Examen',
        'title_singular' => 'Resultados del Examan',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'test'              => 'Examen',
            'test_helper'       => ' ',
            'student'           => 'Estudiante',
            'student_helper'    => ' ',
            'score'             => 'Puntaje',
            'score_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'testAnswer' => [
        'title'          => 'Respuestas de Examen',
        'title_singular' => 'Respuestas de Examan',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'test_result'        => 'Resultado del Examen',
            'test_result_helper' => ' ',
            'question'           => 'Pregunta',
            'question_helper'    => ' ',
            'option'             => 'Opción',
            'option_helper'      => ' ',
            'is_correct'         => 'Es correcta',
            'is_correct_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
];

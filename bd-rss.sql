CREATE DATABASE bdrss;
USE bdrss;
-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2019 a las 06:39:14
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

CREATE TABLE `Urls` (
`Link` longtext NOT NULL
 );


CREATE TABLE `entradas` (
  `Titulo` longtext  NOT NULL,
  `Autor` longtext  NOT NULL,
  `Fecha` longtext  NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Link` longtext NOT NULL
);


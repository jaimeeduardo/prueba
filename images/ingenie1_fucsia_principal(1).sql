-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-11-2021 a las 23:01:57
-- Versión del servidor: 10.3.32-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingenie1_fucsia_principal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento_contable2015`
--

CREATE TABLE `asiento_contable2015` (
  `asi_id` int(11) NOT NULL,
  `asi_fecha` date DEFAULT NULL,
  `asi_documento` varchar(100) DEFAULT NULL,
  `asi_id_documento` int(11) DEFAULT NULL,
  `asi_bodega` int(11) DEFAULT NULL,
  `asi_tipo` varchar(100) DEFAULT NULL,
  `asi_estado` varchar(50) DEFAULT NULL,
  `det_anular` varchar(2000) DEFAULT NULL,
  `periodo` varchar(50) DEFAULT NULL,
  `clase` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_asiento_contable2015`
--

CREATE TABLE `detalle_asiento_contable2015` (
  `dac_id` int(11) NOT NULL,
  `dac_asiento` int(11) DEFAULT NULL,
  `dac_codigo` varchar(50) DEFAULT NULL,
  `dac_cuenta` varchar(100) DEFAULT NULL,
  `dac_detalle` varchar(500) DEFAULT NULL,
  `dac_debe` decimal(10,2) DEFAULT NULL,
  `dac_haber` decimal(10,2) DEFAULT NULL,
  `dac_signo` varchar(1) DEFAULT NULL,
  `dac_numero` int(11) DEFAULT NULL,
  `dac_simbolo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_egreso_bodega2015`
--

CREATE TABLE `detalle_egreso_bodega2015` (
  `id_detalle_egbo` float NOT NULL,
  `deb_codigo` varchar(50) DEFAULT NULL,
  `deb_nombre` varchar(200) DEFAULT NULL,
  `deb_cantidad` decimal(10,2) DEFAULT NULL,
  `id_unidad` float DEFAULT NULL,
  `deb_precio_compra` decimal(10,2) DEFAULT NULL,
  `deb_precio_venta` decimal(10,2) DEFAULT NULL,
  `deb_total_compra` decimal(10,2) DEFAULT NULL,
  `deb_total_venta` decimal(10,2) DEFAULT NULL,
  `id_egreso_bod` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura_producto2015`
--

CREATE TABLE `detalle_factura_producto2015` (
  `id_det_fact_prod` float NOT NULL,
  `dfp_codigo` varchar(50) DEFAULT NULL,
  `dfp_nombre` varchar(200) DEFAULT NULL,
  `dfp_cantidad` decimal(10,2) DEFAULT NULL,
  `id_unidad` float DEFAULT NULL,
  `dfp_precio_compra` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dfp_precio_venta_minimo` decimal(10,2) DEFAULT NULL,
  `dfp_precio_venta` decimal(10,2) DEFAULT NULL,
  `dfp_precio_venta2` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dfp_total_compra` decimal(10,2) DEFAULT NULL,
  `dfp_total_venta` decimal(10,2) DEFAULT NULL,
  `dfp_descuento` decimal(10,2) DEFAULT NULL,
  `id_fact_prod` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura_servicios`
--

CREATE TABLE `detalle_factura_servicios` (
  `id_det_fact_sri` float NOT NULL,
  `id_facturasri` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL,
  `dfs_cod_principal` varchar(25) DEFAULT NULL,
  `dfs_cod_auxiliar` varchar(25) DEFAULT NULL,
  `dfs_descripcion` varchar(300) DEFAULT NULL,
  `dfs_unidad` float DEFAULT NULL,
  `dfs_cantidad` decimal(14,2) DEFAULT NULL,
  `dfs_precio_unit` decimal(14,2) DEFAULT NULL,
  `dfs_porc_desc` decimal(10,2) DEFAULT NULL,
  `dfs_descuento` decimal(14,2) DEFAULT NULL,
  `dfs_precio_tot_sim` decimal(14,2) DEFAULT NULL,
  `dfs_codigo` varchar(4) DEFAULT NULL,
  `dfs_cod_porcentaje` varchar(4) DEFAULT NULL,
  `dfs_tarifa` decimal(10,2) DEFAULT NULL,
  `dfs_base_imponible` decimal(14,2) DEFAULT NULL,
  `dfs_valor` decimal(14,2) DEFAULT NULL,
  `dfs_val_iva` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura_sri2015`
--

CREATE TABLE `detalle_factura_sri2015` (
  `id_det_fact_sri` float NOT NULL,
  `id_facturasri` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL,
  `dfs_cod_principal` varchar(25) DEFAULT NULL,
  `dfs_cod_auxiliar` varchar(25) DEFAULT NULL,
  `dfs_descripcion` varchar(300) DEFAULT NULL,
  `dfs_unidad` float DEFAULT NULL,
  `dfs_cantidad` decimal(14,2) DEFAULT NULL,
  `dfs_precio_unit` decimal(14,2) DEFAULT NULL,
  `dfs_porc_desc` decimal(10,2) DEFAULT NULL,
  `dfs_descuento` decimal(14,2) DEFAULT NULL,
  `dfs_precio_tot_sim` decimal(14,2) DEFAULT NULL,
  `dfs_codigo` varchar(4) DEFAULT NULL,
  `dfs_cod_porcentaje` varchar(4) DEFAULT NULL,
  `dfs_tarifa` decimal(10,2) DEFAULT NULL,
  `dfs_base_imponible` decimal(14,2) DEFAULT NULL,
  `dfs_valor` decimal(14,2) DEFAULT NULL,
  `dfs_val_iva` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_guia_remision`
--

CREATE TABLE `detalle_guia_remision` (
  `id_det_fact_sri` float NOT NULL,
  `id_facturasri` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL,
  `dfs_cod_principal` varchar(25) DEFAULT NULL,
  `dfs_cod_auxiliar` varchar(25) DEFAULT NULL,
  `dfs_descripcion` varchar(300) DEFAULT NULL,
  `dfs_unidad` float DEFAULT NULL,
  `dfs_cantidad` decimal(14,2) DEFAULT NULL,
  `dfs_precio_unit` decimal(14,2) DEFAULT NULL,
  `dfs_porc_desc` decimal(10,2) DEFAULT NULL,
  `dfs_descuento` decimal(14,2) DEFAULT NULL,
  `dfs_precio_tot_sim` decimal(14,2) DEFAULT NULL,
  `dfs_codigo` varchar(4) DEFAULT NULL,
  `dfs_cod_porcentaje` varchar(4) DEFAULT NULL,
  `dfs_tarifa` decimal(10,2) DEFAULT NULL,
  `dfs_base_imponible` decimal(14,2) DEFAULT NULL,
  `dfs_valor` decimal(14,2) DEFAULT NULL,
  `dfs_val_iva` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso_bodega2015`
--

CREATE TABLE `detalle_ingreso_bodega2015` (
  `id_detalle_inbo` float NOT NULL,
  `dib_codigo` varchar(50) DEFAULT NULL,
  `dib_nombre` varchar(200) DEFAULT NULL,
  `dib_cantidad` decimal(10,2) DEFAULT NULL,
  `id_unidad` float DEFAULT NULL,
  `dib_precio_compra` decimal(10,2) DEFAULT NULL,
  `dib_precio_venta` decimal(10,2) DEFAULT NULL,
  `dib_total_compra` decimal(10,2) DEFAULT NULL,
  `dib_total_venta` decimal(10,2) DEFAULT NULL,
  `id_ingreso_bod` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_nota_credito_sri2015`
--

CREATE TABLE `detalle_nota_credito_sri2015` (
  `id_det_nota_credito` float NOT NULL,
  `id_nota_credito` float DEFAULT NULL,
  `dnc_cod_principal` varchar(25) DEFAULT NULL,
  `dnc_cod_auxiliar` varchar(25) DEFAULT NULL,
  `dnc_descripcion` varchar(300) DEFAULT NULL,
  `dnc_cantidad` decimal(14,2) DEFAULT NULL,
  `dnc_precio_unit` decimal(14,2) DEFAULT NULL,
  `dnc_descuento` decimal(14,2) DEFAULT NULL,
  `dnc_precio_tot_sim` decimal(14,2) DEFAULT NULL,
  `dnc_codigo` varchar(4) DEFAULT NULL,
  `dnc_cod_porcentaje` varchar(4) DEFAULT NULL,
  `dnc_tarifa` decimal(10,2) DEFAULT NULL,
  `dnc_base_imponible` decimal(14,2) DEFAULT NULL,
  `dnc_valor` decimal(14,2) DEFAULT NULL,
  `id_producto` float DEFAULT NULL,
  `dnc_unidad` float DEFAULT NULL,
  `dnc_porc_desc` decimal(10,2) DEFAULT NULL,
  `dnc_val_iva` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_retencion_factura_venta2015`
--

CREATE TABLE `detalle_retencion_factura_venta2015` (
  `id_detalle_ret` float NOT NULL,
  `id_retencion` float DEFAULT NULL,
  `drt_codigo` varchar(50) DEFAULT NULL,
  `drt_codigoret` varchar(50) DEFAULT NULL,
  `drt_baseimponible` decimal(10,2) DEFAULT NULL,
  `drt_porcentajeret` decimal(10,2) DEFAULT NULL,
  `drt_valorretenido` decimal(10,2) DEFAULT NULL,
  `drt_coddocsustent` varchar(50) DEFAULT NULL,
  `drt_numdocsustent` varchar(50) DEFAULT NULL,
  `drt_fechaemision` date DEFAULT NULL,
  `drt_ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_retencion_sri2015`
--

CREATE TABLE `detalle_retencion_sri2015` (
  `id_detalle_ret` float NOT NULL,
  `id_retencion` float DEFAULT NULL,
  `drt_codigo` varchar(50) DEFAULT NULL,
  `drt_codigoret` varchar(50) DEFAULT NULL,
  `drt_baseimponible` decimal(10,2) DEFAULT NULL,
  `drt_porcentajeret` decimal(10,2) DEFAULT NULL,
  `drt_valorretenido` decimal(10,2) DEFAULT NULL,
  `drt_coddocsustent` varchar(50) DEFAULT NULL,
  `drt_numdocsustent` varchar(50) DEFAULT NULL,
  `drt_fechaemision` date DEFAULT NULL,
  `drt_ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_transferencia_bodega2015`
--

CREATE TABLE `detalle_transferencia_bodega2015` (
  `id_detalle_trbo` float NOT NULL,
  `dtb_codigo` varchar(50) DEFAULT NULL,
  `dtb_nombre` varchar(200) DEFAULT NULL,
  `dtb_cantidad` decimal(10,2) DEFAULT NULL,
  `id_unidad` float DEFAULT NULL,
  `dtb_precio_compra` decimal(10,2) DEFAULT NULL,
  `dtb_precio_venta` decimal(10,2) DEFAULT NULL,
  `dtb_total_compra` decimal(10,2) DEFAULT NULL,
  `dtb_total_venta` decimal(10,2) DEFAULT NULL,
  `id_transf_bod` float DEFAULT NULL,
  `id_producto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_sri2015`
--

CREATE TABLE `factura_sri2015` (
  `id_facturasri` float NOT NULL,
  `sri_ambiente` varchar(10) DEFAULT NULL,
  `sri_tipo_emision` varchar(10) DEFAULT NULL,
  `sri_razon_social` varchar(300) DEFAULT NULL,
  `sri_nombre_comerc` varchar(300) DEFAULT NULL,
  `sri_ruc` varchar(20) DEFAULT NULL,
  `sri_clave_acceso` varchar(49) DEFAULT NULL,
  `sri_cod_doc` varchar(20) DEFAULT NULL,
  `sri_estab` varchar(20) DEFAULT NULL,
  `sri_pto_emi` varchar(20) DEFAULT NULL,
  `sri_secuencial` varchar(20) DEFAULT NULL,
  `sri_num_secuencial` float DEFAULT NULL,
  `sri_dir_matriz` varchar(300) DEFAULT NULL,
  `sri_fecha_emi` date DEFAULT NULL,
  `sri_dir_establec` varchar(300) DEFAULT NULL,
  `sri_contribuyente` varchar(20) DEFAULT NULL,
  `sri_contabilidad` varchar(20) DEFAULT NULL,
  `sri_tipo_iden_com` varchar(20) DEFAULT NULL,
  `sri_guia_remision` varchar(20) DEFAULT NULL,
  `sri_razon_soc_com` varchar(300) DEFAULT NULL,
  `sri_identifi_com` varchar(20) DEFAULT NULL,
  `sri_direccion_com` varchar(300) DEFAULT NULL,
  `sri_totsinimpuesto` decimal(10,2) DEFAULT NULL,
  `sri_total_descuento` decimal(10,2) DEFAULT NULL,
  `sri_codigo` varchar(10) DEFAULT NULL,
  `sri_cod_porcentaje` varchar(20) DEFAULT NULL,
  `sri_desc_adicional` decimal(10,2) DEFAULT NULL,
  `sri_tarifa` decimal(10,2) DEFAULT NULL,
  `sri_base_imponible` decimal(10,2) DEFAULT NULL,
  `sri_valor` decimal(10,2) DEFAULT NULL,
  `sri_importe_total` decimal(10,2) DEFAULT NULL,
  `sri_moneda` varchar(20) DEFAULT NULL,
  `sri_propina` decimal(10,2) DEFAULT NULL,
  `sri_estado` varchar(20) DEFAULT NULL,
  `sri_error` varchar(5000) DEFAULT NULL,
  `sri_fecha_autorizacion` varchar(1000) DEFAULT NULL,
  `sri_xml_factura` varchar(1000) DEFAULT NULL,
  `sri_firma_factura` varchar(1000) DEFAULT NULL,
  `sri_autorizacion` varchar(500) DEFAULT NULL,
  `sri_respuesta_amb` varchar(100) DEFAULT NULL,
  `sri_hora` time DEFAULT NULL,
  `sri_iva_cero` decimal(10,2) DEFAULT NULL,
  `sri_iva_doce` decimal(10,2) DEFAULT NULL,
  `sri_porc_desc` decimal(10,2) DEFAULT NULL,
  `sri_observacion` varchar(5000) DEFAULT NULL,
  `sri_id_bodega` float DEFAULT NULL,
  `sri_id_usuario` float DEFAULT NULL,
  `sri_email` varchar(500) DEFAULT NULL,
  `sri_nota_credito` float DEFAULT NULL,
  `sri_estado_nota` varchar(100) DEFAULT NULL,
  `det_anular` varchar(2000) DEFAULT NULL,
  `sri_clase` varchar(100) DEFAULT NULL,
  `separado` varchar(12) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago_contado2015`
--

CREATE TABLE `forma_pago_contado2015` (
  `id` float NOT NULL,
  `numero_factura` varchar(30) DEFAULT NULL,
  `forma` varchar(50) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fpc_recibo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago_contado_compras2015`
--

CREATE TABLE `forma_pago_contado_compras2015` (
  `id` float NOT NULL,
  `numero_factura` varchar(30) DEFAULT NULL,
  `id_proveedor` varchar(20) DEFAULT NULL,
  `forma` varchar(50) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `banco` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fpc_comprobante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_factura_venta2015`
--

CREATE TABLE `pago_factura_venta2015` (
  `pfv_id` float NOT NULL,
  `pfv_factura` int(50) DEFAULT NULL,
  `pfv_ot` int(11) DEFAULT NULL,
  `pfv_pc` int(11) DEFAULT NULL,
  `pfv_forma` varchar(50) DEFAULT NULL,
  `pfv_valor` decimal(10,2) DEFAULT NULL,
  `pfv_abono` decimal(10,2) DEFAULT NULL,
  `pfv_estado` varchar(50) DEFAULT NULL,
  `pfv_fecha` date DEFAULT NULL,
  `pfv_hora` time DEFAULT NULL,
  `pfv_documento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `id_recibo` float NOT NULL,
  `rb_cliente` varchar(500) DEFAULT NULL,
  `rb_ci_ruc` varchar(50) DEFAULT NULL,
  `rb_fecha` date DEFAULT NULL,
  `rb_suma` varchar(1000) DEFAULT NULL,
  `rb_concepto` varchar(1000) DEFAULT NULL,
  `rb_notas` varchar(1000) DEFAULT NULL,
  `rb_total` decimal(10,2) DEFAULT NULL,
  `id_orden` float DEFAULT NULL,
  `id_cotizacion` float DEFAULT NULL,
  `rb_numero` varchar(100) DEFAULT NULL,
  `rb_banco` varchar(500) DEFAULT NULL,
  `rb_fcheque` date DEFAULT NULL,
  `rb_forma` varchar(100) DEFAULT NULL,
  `rcb_numero_factura` varchar(50) DEFAULT NULL,
  `rcb_tipo` varchar(25) DEFAULT NULL,
  `rcb_grupo` float DEFAULT NULL,
  `rcb_email` varchar(200) DEFAULT NULL,
  `rcb_direccion` varchar(300) DEFAULT NULL,
  `rcb_telefono1` varchar(30) DEFAULT NULL,
  `rcb_telefono2` varchar(30) DEFAULT NULL,
  `rcb_celular1` varchar(30) DEFAULT NULL,
  `rcb_celular2` varchar(30) DEFAULT NULL,
  `rcb_id_pago` int(11) DEFAULT NULL,
  `rcb_hora` time DEFAULT NULL,
  `rcb_movimiento` varchar(50) DEFAULT NULL,
  `det_anular` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asiento_contable2015`
--
ALTER TABLE `asiento_contable2015`
  ADD PRIMARY KEY (`asi_id`);

--
-- Indices de la tabla `detalle_asiento_contable2015`
--
ALTER TABLE `detalle_asiento_contable2015`
  ADD PRIMARY KEY (`dac_id`);

--
-- Indices de la tabla `detalle_egreso_bodega2015`
--
ALTER TABLE `detalle_egreso_bodega2015`
  ADD PRIMARY KEY (`id_detalle_egbo`);

--
-- Indices de la tabla `detalle_factura_producto2015`
--
ALTER TABLE `detalle_factura_producto2015`
  ADD PRIMARY KEY (`id_det_fact_prod`);

--
-- Indices de la tabla `detalle_factura_servicios`
--
ALTER TABLE `detalle_factura_servicios`
  ADD PRIMARY KEY (`id_det_fact_sri`);

--
-- Indices de la tabla `detalle_factura_sri2015`
--
ALTER TABLE `detalle_factura_sri2015`
  ADD PRIMARY KEY (`id_det_fact_sri`);

--
-- Indices de la tabla `detalle_guia_remision`
--
ALTER TABLE `detalle_guia_remision`
  ADD PRIMARY KEY (`id_det_fact_sri`);

--
-- Indices de la tabla `detalle_ingreso_bodega2015`
--
ALTER TABLE `detalle_ingreso_bodega2015`
  ADD PRIMARY KEY (`id_detalle_inbo`);

--
-- Indices de la tabla `detalle_nota_credito_sri2015`
--
ALTER TABLE `detalle_nota_credito_sri2015`
  ADD PRIMARY KEY (`id_det_nota_credito`);

--
-- Indices de la tabla `detalle_retencion_factura_venta2015`
--
ALTER TABLE `detalle_retencion_factura_venta2015`
  ADD PRIMARY KEY (`id_detalle_ret`);

--
-- Indices de la tabla `detalle_retencion_sri2015`
--
ALTER TABLE `detalle_retencion_sri2015`
  ADD PRIMARY KEY (`id_detalle_ret`);

--
-- Indices de la tabla `detalle_transferencia_bodega2015`
--
ALTER TABLE `detalle_transferencia_bodega2015`
  ADD PRIMARY KEY (`id_detalle_trbo`);

--
-- Indices de la tabla `factura_sri2015`
--
ALTER TABLE `factura_sri2015`
  ADD PRIMARY KEY (`id_facturasri`);

--
-- Indices de la tabla `forma_pago_contado2015`
--
ALTER TABLE `forma_pago_contado2015`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forma_pago_contado_compras2015`
--
ALTER TABLE `forma_pago_contado_compras2015`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_factura_venta2015`
--
ALTER TABLE `pago_factura_venta2015`
  ADD PRIMARY KEY (`pfv_id`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`id_recibo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asiento_contable2015`
--
ALTER TABLE `asiento_contable2015`
  MODIFY `asi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_asiento_contable2015`
--
ALTER TABLE `detalle_asiento_contable2015`
  MODIFY `dac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_egreso_bodega2015`
--
ALTER TABLE `detalle_egreso_bodega2015`
  MODIFY `id_detalle_egbo` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_factura_producto2015`
--
ALTER TABLE `detalle_factura_producto2015`
  MODIFY `id_det_fact_prod` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_factura_servicios`
--
ALTER TABLE `detalle_factura_servicios`
  MODIFY `id_det_fact_sri` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_factura_sri2015`
--
ALTER TABLE `detalle_factura_sri2015`
  MODIFY `id_det_fact_sri` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_guia_remision`
--
ALTER TABLE `detalle_guia_remision`
  MODIFY `id_det_fact_sri` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso_bodega2015`
--
ALTER TABLE `detalle_ingreso_bodega2015`
  MODIFY `id_detalle_inbo` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_nota_credito_sri2015`
--
ALTER TABLE `detalle_nota_credito_sri2015`
  MODIFY `id_det_nota_credito` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_retencion_factura_venta2015`
--
ALTER TABLE `detalle_retencion_factura_venta2015`
  MODIFY `id_detalle_ret` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_retencion_sri2015`
--
ALTER TABLE `detalle_retencion_sri2015`
  MODIFY `id_detalle_ret` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_transferencia_bodega2015`
--
ALTER TABLE `detalle_transferencia_bodega2015`
  MODIFY `id_detalle_trbo` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_sri2015`
--
ALTER TABLE `factura_sri2015`
  MODIFY `id_facturasri` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `forma_pago_contado2015`
--
ALTER TABLE `forma_pago_contado2015`
  MODIFY `id` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `forma_pago_contado_compras2015`
--
ALTER TABLE `forma_pago_contado_compras2015`
  MODIFY `id` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago_factura_venta2015`
--
ALTER TABLE `pago_factura_venta2015`
  MODIFY `pfv_id` float NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `id_recibo` float NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

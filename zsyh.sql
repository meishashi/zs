/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : zsyh

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-12-21 00:14:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for uw_admin
-- ----------------------------
DROP TABLE IF EXISTS `uw_admin`;
CREATE TABLE `uw_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` char(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='admin_tables';

-- ----------------------------
-- Records of uw_admin
-- ----------------------------
INSERT INTO `uw_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for uw_agency
-- ----------------------------
DROP TABLE IF EXISTS `uw_agency`;
CREATE TABLE `uw_agency` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ccid` int(16) NOT NULL,
  `name` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ccid` (`ccid`)
) ENGINE=MyISAM AUTO_INCREMENT=5172 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_agency
-- ----------------------------
INSERT INTO `uw_agency` VALUES ('4171', '2000', 'a');
INSERT INTO `uw_agency` VALUES ('4172', '2001', 'a');
INSERT INTO `uw_agency` VALUES ('4173', '2002', 'a');
INSERT INTO `uw_agency` VALUES ('4174', '2003', 'a');
INSERT INTO `uw_agency` VALUES ('4175', '2004', 'a');
INSERT INTO `uw_agency` VALUES ('4176', '2005', 'a');
INSERT INTO `uw_agency` VALUES ('4177', '2006', 'a');
INSERT INTO `uw_agency` VALUES ('4178', '2007', 'a');
INSERT INTO `uw_agency` VALUES ('4179', '2008', 'a');
INSERT INTO `uw_agency` VALUES ('4180', '2009', 'a');
INSERT INTO `uw_agency` VALUES ('4181', '2010', 'a');
INSERT INTO `uw_agency` VALUES ('4182', '2011', 'a');
INSERT INTO `uw_agency` VALUES ('4183', '2012', 'a');
INSERT INTO `uw_agency` VALUES ('4184', '2013', 'a');
INSERT INTO `uw_agency` VALUES ('4185', '2014', 'a');
INSERT INTO `uw_agency` VALUES ('4186', '2015', 'a');
INSERT INTO `uw_agency` VALUES ('4187', '2016', 'a');
INSERT INTO `uw_agency` VALUES ('4188', '2017', 'a');
INSERT INTO `uw_agency` VALUES ('4189', '2018', 'a');
INSERT INTO `uw_agency` VALUES ('4190', '2019', 'a');
INSERT INTO `uw_agency` VALUES ('4191', '2020', 'a');
INSERT INTO `uw_agency` VALUES ('4192', '2021', 'a');
INSERT INTO `uw_agency` VALUES ('4193', '2022', 'a');
INSERT INTO `uw_agency` VALUES ('4194', '2023', 'a');
INSERT INTO `uw_agency` VALUES ('4195', '2024', 'a');
INSERT INTO `uw_agency` VALUES ('4196', '2025', 'a');
INSERT INTO `uw_agency` VALUES ('4197', '2026', 'a');
INSERT INTO `uw_agency` VALUES ('4198', '2027', 'a');
INSERT INTO `uw_agency` VALUES ('4199', '2028', 'a');
INSERT INTO `uw_agency` VALUES ('4200', '2029', 'a');
INSERT INTO `uw_agency` VALUES ('4201', '2030', 'a');
INSERT INTO `uw_agency` VALUES ('4202', '2031', 'a');
INSERT INTO `uw_agency` VALUES ('4203', '2032', 'a');
INSERT INTO `uw_agency` VALUES ('4204', '2033', 'a');
INSERT INTO `uw_agency` VALUES ('4205', '2034', 'a');
INSERT INTO `uw_agency` VALUES ('4206', '2035', 'a');
INSERT INTO `uw_agency` VALUES ('4207', '2036', 'a');
INSERT INTO `uw_agency` VALUES ('4208', '2037', 'a');
INSERT INTO `uw_agency` VALUES ('4209', '2038', 'a');
INSERT INTO `uw_agency` VALUES ('4210', '2039', 'a');
INSERT INTO `uw_agency` VALUES ('4211', '2040', 'a');
INSERT INTO `uw_agency` VALUES ('4212', '2041', 'a');
INSERT INTO `uw_agency` VALUES ('4213', '2042', 'a');
INSERT INTO `uw_agency` VALUES ('4214', '2043', 'a');
INSERT INTO `uw_agency` VALUES ('4215', '2044', 'a');
INSERT INTO `uw_agency` VALUES ('4216', '2045', 'a');
INSERT INTO `uw_agency` VALUES ('4217', '2046', 'a');
INSERT INTO `uw_agency` VALUES ('4218', '2047', 'a');
INSERT INTO `uw_agency` VALUES ('4219', '2048', 'a');
INSERT INTO `uw_agency` VALUES ('4220', '2049', 'a');
INSERT INTO `uw_agency` VALUES ('4221', '2050', 'a');
INSERT INTO `uw_agency` VALUES ('4222', '2051', 'a');
INSERT INTO `uw_agency` VALUES ('4223', '2052', 'a');
INSERT INTO `uw_agency` VALUES ('4224', '2053', 'a');
INSERT INTO `uw_agency` VALUES ('4225', '2054', 'a');
INSERT INTO `uw_agency` VALUES ('4226', '2055', 'a');
INSERT INTO `uw_agency` VALUES ('4227', '2056', 'a');
INSERT INTO `uw_agency` VALUES ('4228', '2057', 'a');
INSERT INTO `uw_agency` VALUES ('4229', '2058', 'a');
INSERT INTO `uw_agency` VALUES ('4230', '2059', 'a');
INSERT INTO `uw_agency` VALUES ('4231', '2060', 'a');
INSERT INTO `uw_agency` VALUES ('4232', '2061', 'a');
INSERT INTO `uw_agency` VALUES ('4233', '2062', 'a');
INSERT INTO `uw_agency` VALUES ('4234', '2063', 'a');
INSERT INTO `uw_agency` VALUES ('4235', '2064', 'a');
INSERT INTO `uw_agency` VALUES ('4236', '2065', 'a');
INSERT INTO `uw_agency` VALUES ('4237', '2066', 'a');
INSERT INTO `uw_agency` VALUES ('4238', '2067', 'a');
INSERT INTO `uw_agency` VALUES ('4239', '2068', 'a');
INSERT INTO `uw_agency` VALUES ('4240', '2069', 'a');
INSERT INTO `uw_agency` VALUES ('4241', '2070', 'a');
INSERT INTO `uw_agency` VALUES ('4242', '2071', 'a');
INSERT INTO `uw_agency` VALUES ('4243', '2072', 'a');
INSERT INTO `uw_agency` VALUES ('4244', '2073', 'a');
INSERT INTO `uw_agency` VALUES ('4245', '2074', 'a');
INSERT INTO `uw_agency` VALUES ('4246', '2075', 'a');
INSERT INTO `uw_agency` VALUES ('4247', '2076', 'a');
INSERT INTO `uw_agency` VALUES ('4248', '2077', 'a');
INSERT INTO `uw_agency` VALUES ('4249', '2078', 'a');
INSERT INTO `uw_agency` VALUES ('4250', '2079', 'a');
INSERT INTO `uw_agency` VALUES ('4251', '2080', 'a');
INSERT INTO `uw_agency` VALUES ('4252', '2081', 'a');
INSERT INTO `uw_agency` VALUES ('4253', '2082', 'a');
INSERT INTO `uw_agency` VALUES ('4254', '2083', 'a');
INSERT INTO `uw_agency` VALUES ('4255', '2084', 'a');
INSERT INTO `uw_agency` VALUES ('4256', '2085', 'a');
INSERT INTO `uw_agency` VALUES ('4257', '2086', 'a');
INSERT INTO `uw_agency` VALUES ('4258', '2087', 'a');
INSERT INTO `uw_agency` VALUES ('4259', '2088', 'a');
INSERT INTO `uw_agency` VALUES ('4260', '2089', 'a');
INSERT INTO `uw_agency` VALUES ('4261', '2090', 'a');
INSERT INTO `uw_agency` VALUES ('4262', '2091', 'a');
INSERT INTO `uw_agency` VALUES ('4263', '2092', 'a');
INSERT INTO `uw_agency` VALUES ('4264', '2093', 'a');
INSERT INTO `uw_agency` VALUES ('4265', '2094', 'a');
INSERT INTO `uw_agency` VALUES ('4266', '2095', 'a');
INSERT INTO `uw_agency` VALUES ('4267', '2096', 'a');
INSERT INTO `uw_agency` VALUES ('4268', '2097', 'a');
INSERT INTO `uw_agency` VALUES ('4269', '2098', 'a');
INSERT INTO `uw_agency` VALUES ('4270', '2099', 'a');
INSERT INTO `uw_agency` VALUES ('4271', '2100', 'a');
INSERT INTO `uw_agency` VALUES ('4272', '2101', 'a');
INSERT INTO `uw_agency` VALUES ('4273', '2102', 'a');
INSERT INTO `uw_agency` VALUES ('4274', '2103', 'a');
INSERT INTO `uw_agency` VALUES ('4275', '2104', 'a');
INSERT INTO `uw_agency` VALUES ('4276', '2105', 'a');
INSERT INTO `uw_agency` VALUES ('4277', '2106', 'a');
INSERT INTO `uw_agency` VALUES ('4278', '2107', 'a');
INSERT INTO `uw_agency` VALUES ('4279', '2108', 'a');
INSERT INTO `uw_agency` VALUES ('4280', '2109', 'a');
INSERT INTO `uw_agency` VALUES ('4281', '2110', 'a');
INSERT INTO `uw_agency` VALUES ('4282', '2111', 'a');
INSERT INTO `uw_agency` VALUES ('4283', '2112', 'a');
INSERT INTO `uw_agency` VALUES ('4284', '2113', 'a');
INSERT INTO `uw_agency` VALUES ('4285', '2114', 'a');
INSERT INTO `uw_agency` VALUES ('4286', '2115', 'a');
INSERT INTO `uw_agency` VALUES ('4287', '2116', 'a');
INSERT INTO `uw_agency` VALUES ('4288', '2117', 'a');
INSERT INTO `uw_agency` VALUES ('4289', '2118', 'a');
INSERT INTO `uw_agency` VALUES ('4290', '2119', 'a');
INSERT INTO `uw_agency` VALUES ('4291', '2120', 'a');
INSERT INTO `uw_agency` VALUES ('4292', '2121', 'a');
INSERT INTO `uw_agency` VALUES ('4293', '2122', 'a');
INSERT INTO `uw_agency` VALUES ('4294', '2123', 'a');
INSERT INTO `uw_agency` VALUES ('4295', '2124', 'a');
INSERT INTO `uw_agency` VALUES ('4296', '2125', 'a');
INSERT INTO `uw_agency` VALUES ('4297', '2126', 'a');
INSERT INTO `uw_agency` VALUES ('4298', '2127', 'a');
INSERT INTO `uw_agency` VALUES ('4299', '2128', 'a');
INSERT INTO `uw_agency` VALUES ('4300', '2129', 'a');
INSERT INTO `uw_agency` VALUES ('4301', '2130', 'a');
INSERT INTO `uw_agency` VALUES ('4302', '2131', 'a');
INSERT INTO `uw_agency` VALUES ('4303', '2132', 'a');
INSERT INTO `uw_agency` VALUES ('4304', '2133', 'a');
INSERT INTO `uw_agency` VALUES ('4305', '2134', 'a');
INSERT INTO `uw_agency` VALUES ('4306', '2135', 'a');
INSERT INTO `uw_agency` VALUES ('4307', '2136', 'a');
INSERT INTO `uw_agency` VALUES ('4308', '2137', 'a');
INSERT INTO `uw_agency` VALUES ('4309', '2138', 'a');
INSERT INTO `uw_agency` VALUES ('4310', '2139', 'a');
INSERT INTO `uw_agency` VALUES ('4311', '2140', 'a');
INSERT INTO `uw_agency` VALUES ('4312', '2141', 'a');
INSERT INTO `uw_agency` VALUES ('4313', '2142', 'a');
INSERT INTO `uw_agency` VALUES ('4314', '2143', 'a');
INSERT INTO `uw_agency` VALUES ('4315', '2144', 'a');
INSERT INTO `uw_agency` VALUES ('4316', '2145', 'a');
INSERT INTO `uw_agency` VALUES ('4317', '2146', 'a');
INSERT INTO `uw_agency` VALUES ('4318', '2147', 'a');
INSERT INTO `uw_agency` VALUES ('4319', '2148', 'a');
INSERT INTO `uw_agency` VALUES ('4320', '2149', 'a');
INSERT INTO `uw_agency` VALUES ('4321', '2150', 'a');
INSERT INTO `uw_agency` VALUES ('4322', '2151', 'a');
INSERT INTO `uw_agency` VALUES ('4323', '2152', 'a');
INSERT INTO `uw_agency` VALUES ('4324', '2153', 'a');
INSERT INTO `uw_agency` VALUES ('4325', '2154', 'a');
INSERT INTO `uw_agency` VALUES ('4326', '2155', 'a');
INSERT INTO `uw_agency` VALUES ('4327', '2156', 'a');
INSERT INTO `uw_agency` VALUES ('4328', '2157', 'a');
INSERT INTO `uw_agency` VALUES ('4329', '2158', 'a');
INSERT INTO `uw_agency` VALUES ('4330', '2159', 'a');
INSERT INTO `uw_agency` VALUES ('4331', '2160', 'a');
INSERT INTO `uw_agency` VALUES ('4332', '2161', 'a');
INSERT INTO `uw_agency` VALUES ('4333', '2162', 'a');
INSERT INTO `uw_agency` VALUES ('4334', '2163', 'a');
INSERT INTO `uw_agency` VALUES ('4335', '2164', 'a');
INSERT INTO `uw_agency` VALUES ('4336', '2165', 'a');
INSERT INTO `uw_agency` VALUES ('4337', '2166', 'a');
INSERT INTO `uw_agency` VALUES ('4338', '2167', 'a');
INSERT INTO `uw_agency` VALUES ('4339', '2168', 'a');
INSERT INTO `uw_agency` VALUES ('4340', '2169', 'a');
INSERT INTO `uw_agency` VALUES ('4341', '2170', 'a');
INSERT INTO `uw_agency` VALUES ('4342', '2171', 'a');
INSERT INTO `uw_agency` VALUES ('4343', '2172', 'a');
INSERT INTO `uw_agency` VALUES ('4344', '2173', 'a');
INSERT INTO `uw_agency` VALUES ('4345', '2174', 'a');
INSERT INTO `uw_agency` VALUES ('4346', '2175', 'a');
INSERT INTO `uw_agency` VALUES ('4347', '2176', 'a');
INSERT INTO `uw_agency` VALUES ('4348', '2177', 'a');
INSERT INTO `uw_agency` VALUES ('4349', '2178', 'a');
INSERT INTO `uw_agency` VALUES ('4350', '2179', 'a');
INSERT INTO `uw_agency` VALUES ('4351', '2180', 'a');
INSERT INTO `uw_agency` VALUES ('4352', '2181', 'a');
INSERT INTO `uw_agency` VALUES ('4353', '2182', 'a');
INSERT INTO `uw_agency` VALUES ('4354', '2183', 'a');
INSERT INTO `uw_agency` VALUES ('4355', '2184', 'a');
INSERT INTO `uw_agency` VALUES ('4356', '2185', 'a');
INSERT INTO `uw_agency` VALUES ('4357', '2186', 'a');
INSERT INTO `uw_agency` VALUES ('4358', '2187', 'a');
INSERT INTO `uw_agency` VALUES ('4359', '2188', 'a');
INSERT INTO `uw_agency` VALUES ('4360', '2189', 'a');
INSERT INTO `uw_agency` VALUES ('4361', '2190', 'a');
INSERT INTO `uw_agency` VALUES ('4362', '2191', 'a');
INSERT INTO `uw_agency` VALUES ('4363', '2192', 'a');
INSERT INTO `uw_agency` VALUES ('4364', '2193', 'a');
INSERT INTO `uw_agency` VALUES ('4365', '2194', 'a');
INSERT INTO `uw_agency` VALUES ('4366', '2195', 'a');
INSERT INTO `uw_agency` VALUES ('4367', '2196', 'a');
INSERT INTO `uw_agency` VALUES ('4368', '2197', 'a');
INSERT INTO `uw_agency` VALUES ('4369', '2198', 'a');
INSERT INTO `uw_agency` VALUES ('4370', '2199', 'a');
INSERT INTO `uw_agency` VALUES ('4371', '2200', 'a');
INSERT INTO `uw_agency` VALUES ('4372', '2201', 'a');
INSERT INTO `uw_agency` VALUES ('4373', '2202', 'a');
INSERT INTO `uw_agency` VALUES ('4374', '2203', 'a');
INSERT INTO `uw_agency` VALUES ('4375', '2204', 'a');
INSERT INTO `uw_agency` VALUES ('4376', '2205', 'a');
INSERT INTO `uw_agency` VALUES ('4377', '2206', 'a');
INSERT INTO `uw_agency` VALUES ('4378', '2207', 'a');
INSERT INTO `uw_agency` VALUES ('4379', '2208', 'a');
INSERT INTO `uw_agency` VALUES ('4380', '2209', 'a');
INSERT INTO `uw_agency` VALUES ('4381', '2210', 'a');
INSERT INTO `uw_agency` VALUES ('4382', '2211', 'a');
INSERT INTO `uw_agency` VALUES ('4383', '2212', 'a');
INSERT INTO `uw_agency` VALUES ('4384', '2213', 'a');
INSERT INTO `uw_agency` VALUES ('4385', '2214', 'a');
INSERT INTO `uw_agency` VALUES ('4386', '2215', 'a');
INSERT INTO `uw_agency` VALUES ('4387', '2216', 'a');
INSERT INTO `uw_agency` VALUES ('4388', '2217', 'a');
INSERT INTO `uw_agency` VALUES ('4389', '2218', 'a');
INSERT INTO `uw_agency` VALUES ('4390', '2219', 'a');
INSERT INTO `uw_agency` VALUES ('4391', '2220', 'a');
INSERT INTO `uw_agency` VALUES ('4392', '2221', 'a');
INSERT INTO `uw_agency` VALUES ('4393', '2222', 'a');
INSERT INTO `uw_agency` VALUES ('4394', '2223', 'a');
INSERT INTO `uw_agency` VALUES ('4395', '2224', 'a');
INSERT INTO `uw_agency` VALUES ('4396', '2225', 'a');
INSERT INTO `uw_agency` VALUES ('4397', '2226', 'a');
INSERT INTO `uw_agency` VALUES ('4398', '2227', 'a');
INSERT INTO `uw_agency` VALUES ('4399', '2228', 'a');
INSERT INTO `uw_agency` VALUES ('4400', '2229', 'a');
INSERT INTO `uw_agency` VALUES ('4401', '2230', 'a');
INSERT INTO `uw_agency` VALUES ('4402', '2231', 'a');
INSERT INTO `uw_agency` VALUES ('4403', '2232', 'a');
INSERT INTO `uw_agency` VALUES ('4404', '2233', 'a');
INSERT INTO `uw_agency` VALUES ('4405', '2234', 'a');
INSERT INTO `uw_agency` VALUES ('4406', '2235', 'a');
INSERT INTO `uw_agency` VALUES ('4407', '2236', 'a');
INSERT INTO `uw_agency` VALUES ('4408', '2237', 'a');
INSERT INTO `uw_agency` VALUES ('4409', '2238', 'a');
INSERT INTO `uw_agency` VALUES ('4410', '2239', 'a');
INSERT INTO `uw_agency` VALUES ('4411', '2240', 'a');
INSERT INTO `uw_agency` VALUES ('4412', '2241', 'a');
INSERT INTO `uw_agency` VALUES ('4413', '2242', 'a');
INSERT INTO `uw_agency` VALUES ('4414', '2243', 'a');
INSERT INTO `uw_agency` VALUES ('4415', '2244', 'a');
INSERT INTO `uw_agency` VALUES ('4416', '2245', 'a');
INSERT INTO `uw_agency` VALUES ('4417', '2246', 'a');
INSERT INTO `uw_agency` VALUES ('4418', '2247', 'a');
INSERT INTO `uw_agency` VALUES ('4419', '2248', 'a');
INSERT INTO `uw_agency` VALUES ('4420', '2249', 'a');
INSERT INTO `uw_agency` VALUES ('4421', '2250', 'a');
INSERT INTO `uw_agency` VALUES ('4422', '2251', 'a');
INSERT INTO `uw_agency` VALUES ('4423', '2252', 'a');
INSERT INTO `uw_agency` VALUES ('4424', '2253', 'a');
INSERT INTO `uw_agency` VALUES ('4425', '2254', 'a');
INSERT INTO `uw_agency` VALUES ('4426', '2255', 'a');
INSERT INTO `uw_agency` VALUES ('4427', '2256', 'a');
INSERT INTO `uw_agency` VALUES ('4428', '2257', 'a');
INSERT INTO `uw_agency` VALUES ('4429', '2258', 'a');
INSERT INTO `uw_agency` VALUES ('4430', '2259', 'a');
INSERT INTO `uw_agency` VALUES ('4431', '2260', 'a');
INSERT INTO `uw_agency` VALUES ('4432', '2261', 'a');
INSERT INTO `uw_agency` VALUES ('4433', '2262', 'a');
INSERT INTO `uw_agency` VALUES ('4434', '2263', 'a');
INSERT INTO `uw_agency` VALUES ('4435', '2264', 'a');
INSERT INTO `uw_agency` VALUES ('4436', '2265', 'a');
INSERT INTO `uw_agency` VALUES ('4437', '2266', 'a');
INSERT INTO `uw_agency` VALUES ('4438', '2267', 'a');
INSERT INTO `uw_agency` VALUES ('4439', '2268', 'a');
INSERT INTO `uw_agency` VALUES ('4440', '2269', 'a');
INSERT INTO `uw_agency` VALUES ('4441', '2270', 'a');
INSERT INTO `uw_agency` VALUES ('4442', '2271', 'a');
INSERT INTO `uw_agency` VALUES ('4443', '2272', 'a');
INSERT INTO `uw_agency` VALUES ('4444', '2273', 'a');
INSERT INTO `uw_agency` VALUES ('4445', '2274', 'a');
INSERT INTO `uw_agency` VALUES ('4446', '2275', 'a');
INSERT INTO `uw_agency` VALUES ('4447', '2276', 'a');
INSERT INTO `uw_agency` VALUES ('4448', '2277', 'a');
INSERT INTO `uw_agency` VALUES ('4449', '2278', 'a');
INSERT INTO `uw_agency` VALUES ('4450', '2279', 'a');
INSERT INTO `uw_agency` VALUES ('4451', '2280', 'a');
INSERT INTO `uw_agency` VALUES ('4452', '2281', 'a');
INSERT INTO `uw_agency` VALUES ('4453', '2282', 'a');
INSERT INTO `uw_agency` VALUES ('4454', '2283', 'a');
INSERT INTO `uw_agency` VALUES ('4455', '2284', 'a');
INSERT INTO `uw_agency` VALUES ('4456', '2285', 'a');
INSERT INTO `uw_agency` VALUES ('4457', '2286', 'a');
INSERT INTO `uw_agency` VALUES ('4458', '2287', 'a');
INSERT INTO `uw_agency` VALUES ('4459', '2288', 'a');
INSERT INTO `uw_agency` VALUES ('4460', '2289', 'a');
INSERT INTO `uw_agency` VALUES ('4461', '2290', 'a');
INSERT INTO `uw_agency` VALUES ('4462', '2291', 'a');
INSERT INTO `uw_agency` VALUES ('4463', '2292', 'a');
INSERT INTO `uw_agency` VALUES ('4464', '2293', 'a');
INSERT INTO `uw_agency` VALUES ('4465', '2294', 'a');
INSERT INTO `uw_agency` VALUES ('4466', '2295', 'a');
INSERT INTO `uw_agency` VALUES ('4467', '2296', 'a');
INSERT INTO `uw_agency` VALUES ('4468', '2297', 'a');
INSERT INTO `uw_agency` VALUES ('4469', '2298', 'a');
INSERT INTO `uw_agency` VALUES ('4470', '2299', 'a');
INSERT INTO `uw_agency` VALUES ('4471', '2300', 'a');
INSERT INTO `uw_agency` VALUES ('4472', '2301', 'a');
INSERT INTO `uw_agency` VALUES ('4473', '2302', 'a');
INSERT INTO `uw_agency` VALUES ('4474', '2303', 'a');
INSERT INTO `uw_agency` VALUES ('4475', '2304', 'a');
INSERT INTO `uw_agency` VALUES ('4476', '2305', 'a');
INSERT INTO `uw_agency` VALUES ('4477', '2306', 'a');
INSERT INTO `uw_agency` VALUES ('4478', '2307', 'a');
INSERT INTO `uw_agency` VALUES ('4479', '2308', 'a');
INSERT INTO `uw_agency` VALUES ('4480', '2309', 'a');
INSERT INTO `uw_agency` VALUES ('4481', '2310', 'a');
INSERT INTO `uw_agency` VALUES ('4482', '2311', 'a');
INSERT INTO `uw_agency` VALUES ('4483', '2312', 'a');
INSERT INTO `uw_agency` VALUES ('4484', '2313', 'a');
INSERT INTO `uw_agency` VALUES ('4485', '2314', 'a');
INSERT INTO `uw_agency` VALUES ('4486', '2315', 'a');
INSERT INTO `uw_agency` VALUES ('4487', '2316', 'a');
INSERT INTO `uw_agency` VALUES ('4488', '2317', 'a');
INSERT INTO `uw_agency` VALUES ('4489', '2318', 'a');
INSERT INTO `uw_agency` VALUES ('4490', '2319', 'a');
INSERT INTO `uw_agency` VALUES ('4491', '2320', 'a');
INSERT INTO `uw_agency` VALUES ('4492', '2321', 'a');
INSERT INTO `uw_agency` VALUES ('4493', '2322', 'a');
INSERT INTO `uw_agency` VALUES ('4494', '2323', 'a');
INSERT INTO `uw_agency` VALUES ('4495', '2324', 'a');
INSERT INTO `uw_agency` VALUES ('4496', '2325', 'a');
INSERT INTO `uw_agency` VALUES ('4497', '2326', 'a');
INSERT INTO `uw_agency` VALUES ('4498', '2327', 'a');
INSERT INTO `uw_agency` VALUES ('4499', '2328', 'a');
INSERT INTO `uw_agency` VALUES ('4500', '2329', 'a');
INSERT INTO `uw_agency` VALUES ('4501', '2330', 'a');
INSERT INTO `uw_agency` VALUES ('4502', '2331', 'a');
INSERT INTO `uw_agency` VALUES ('4503', '2332', 'a');
INSERT INTO `uw_agency` VALUES ('4504', '2333', 'a');
INSERT INTO `uw_agency` VALUES ('4505', '2334', 'a');
INSERT INTO `uw_agency` VALUES ('4506', '2335', 'a');
INSERT INTO `uw_agency` VALUES ('4507', '2336', 'a');
INSERT INTO `uw_agency` VALUES ('4508', '2337', 'a');
INSERT INTO `uw_agency` VALUES ('4509', '2338', 'a');
INSERT INTO `uw_agency` VALUES ('4510', '2339', 'a');
INSERT INTO `uw_agency` VALUES ('4511', '2340', 'a');
INSERT INTO `uw_agency` VALUES ('4512', '2341', 'a');
INSERT INTO `uw_agency` VALUES ('4513', '2342', 'a');
INSERT INTO `uw_agency` VALUES ('4514', '2343', 'a');
INSERT INTO `uw_agency` VALUES ('4515', '2344', 'a');
INSERT INTO `uw_agency` VALUES ('4516', '2345', 'a');
INSERT INTO `uw_agency` VALUES ('4517', '2346', 'a');
INSERT INTO `uw_agency` VALUES ('4518', '2347', 'a');
INSERT INTO `uw_agency` VALUES ('4519', '2348', 'a');
INSERT INTO `uw_agency` VALUES ('4520', '2349', 'a');
INSERT INTO `uw_agency` VALUES ('4521', '2350', 'a');
INSERT INTO `uw_agency` VALUES ('4522', '2351', 'a');
INSERT INTO `uw_agency` VALUES ('4523', '2352', 'a');
INSERT INTO `uw_agency` VALUES ('4524', '2353', 'a');
INSERT INTO `uw_agency` VALUES ('4525', '2354', 'a');
INSERT INTO `uw_agency` VALUES ('4526', '2355', 'a');
INSERT INTO `uw_agency` VALUES ('4527', '2356', 'a');
INSERT INTO `uw_agency` VALUES ('4528', '2357', 'a');
INSERT INTO `uw_agency` VALUES ('4529', '2358', 'a');
INSERT INTO `uw_agency` VALUES ('4530', '2359', 'a');
INSERT INTO `uw_agency` VALUES ('4531', '2360', 'a');
INSERT INTO `uw_agency` VALUES ('4532', '2361', 'a');
INSERT INTO `uw_agency` VALUES ('4533', '2362', 'a');
INSERT INTO `uw_agency` VALUES ('4534', '2363', 'a');
INSERT INTO `uw_agency` VALUES ('4535', '2364', 'a');
INSERT INTO `uw_agency` VALUES ('4536', '2365', 'a');
INSERT INTO `uw_agency` VALUES ('4537', '2366', 'a');
INSERT INTO `uw_agency` VALUES ('4538', '2367', 'a');
INSERT INTO `uw_agency` VALUES ('4539', '2368', 'a');
INSERT INTO `uw_agency` VALUES ('4540', '2369', 'a');
INSERT INTO `uw_agency` VALUES ('4541', '2370', 'a');
INSERT INTO `uw_agency` VALUES ('4542', '2371', 'a');
INSERT INTO `uw_agency` VALUES ('4543', '2372', 'a');
INSERT INTO `uw_agency` VALUES ('4544', '2373', 'a');
INSERT INTO `uw_agency` VALUES ('4545', '2374', 'a');
INSERT INTO `uw_agency` VALUES ('4546', '2375', 'a');
INSERT INTO `uw_agency` VALUES ('4547', '2376', 'a');
INSERT INTO `uw_agency` VALUES ('4548', '2377', 'a');
INSERT INTO `uw_agency` VALUES ('4549', '2378', 'a');
INSERT INTO `uw_agency` VALUES ('4550', '2379', 'a');
INSERT INTO `uw_agency` VALUES ('4551', '2380', 'a');
INSERT INTO `uw_agency` VALUES ('4552', '2381', 'a');
INSERT INTO `uw_agency` VALUES ('4553', '2382', 'a');
INSERT INTO `uw_agency` VALUES ('4554', '2383', 'a');
INSERT INTO `uw_agency` VALUES ('4555', '2384', 'a');
INSERT INTO `uw_agency` VALUES ('4556', '2385', 'a');
INSERT INTO `uw_agency` VALUES ('4557', '2386', 'a');
INSERT INTO `uw_agency` VALUES ('4558', '2387', 'a');
INSERT INTO `uw_agency` VALUES ('4559', '2388', 'a');
INSERT INTO `uw_agency` VALUES ('4560', '2389', 'a');
INSERT INTO `uw_agency` VALUES ('4561', '2390', 'a');
INSERT INTO `uw_agency` VALUES ('4562', '2391', 'a');
INSERT INTO `uw_agency` VALUES ('4563', '2392', 'a');
INSERT INTO `uw_agency` VALUES ('4564', '2393', 'a');
INSERT INTO `uw_agency` VALUES ('4565', '2394', 'a');
INSERT INTO `uw_agency` VALUES ('4566', '2395', 'a');
INSERT INTO `uw_agency` VALUES ('4567', '2396', 'a');
INSERT INTO `uw_agency` VALUES ('4568', '2397', 'a');
INSERT INTO `uw_agency` VALUES ('4569', '2398', 'a');
INSERT INTO `uw_agency` VALUES ('4570', '2399', 'a');
INSERT INTO `uw_agency` VALUES ('4571', '2400', 'a');
INSERT INTO `uw_agency` VALUES ('4572', '2401', 'a');
INSERT INTO `uw_agency` VALUES ('4573', '2402', 'a');
INSERT INTO `uw_agency` VALUES ('4574', '2403', 'a');
INSERT INTO `uw_agency` VALUES ('4575', '2404', 'a');
INSERT INTO `uw_agency` VALUES ('4576', '2405', 'a');
INSERT INTO `uw_agency` VALUES ('4577', '2406', 'a');
INSERT INTO `uw_agency` VALUES ('4578', '2407', 'a');
INSERT INTO `uw_agency` VALUES ('4579', '2408', 'a');
INSERT INTO `uw_agency` VALUES ('4580', '2409', 'a');
INSERT INTO `uw_agency` VALUES ('4581', '2410', 'a');
INSERT INTO `uw_agency` VALUES ('4582', '2411', 'a');
INSERT INTO `uw_agency` VALUES ('4583', '2412', 'a');
INSERT INTO `uw_agency` VALUES ('4584', '2413', 'a');
INSERT INTO `uw_agency` VALUES ('4585', '2414', 'a');
INSERT INTO `uw_agency` VALUES ('4586', '2415', 'a');
INSERT INTO `uw_agency` VALUES ('4587', '2416', 'a');
INSERT INTO `uw_agency` VALUES ('4588', '2417', 'a');
INSERT INTO `uw_agency` VALUES ('4589', '2418', 'a');
INSERT INTO `uw_agency` VALUES ('4590', '2419', 'a');
INSERT INTO `uw_agency` VALUES ('4591', '2420', 'a');
INSERT INTO `uw_agency` VALUES ('4592', '2421', 'a');
INSERT INTO `uw_agency` VALUES ('4593', '2422', 'a');
INSERT INTO `uw_agency` VALUES ('4594', '2423', 'a');
INSERT INTO `uw_agency` VALUES ('4595', '2424', 'a');
INSERT INTO `uw_agency` VALUES ('4596', '2425', 'a');
INSERT INTO `uw_agency` VALUES ('4597', '2426', 'a');
INSERT INTO `uw_agency` VALUES ('4598', '2427', 'a');
INSERT INTO `uw_agency` VALUES ('4599', '2428', 'a');
INSERT INTO `uw_agency` VALUES ('4600', '2429', 'a');
INSERT INTO `uw_agency` VALUES ('4601', '2430', 'a');
INSERT INTO `uw_agency` VALUES ('4602', '2431', 'a');
INSERT INTO `uw_agency` VALUES ('4603', '2432', 'a');
INSERT INTO `uw_agency` VALUES ('4604', '2433', 'a');
INSERT INTO `uw_agency` VALUES ('4605', '2434', 'a');
INSERT INTO `uw_agency` VALUES ('4606', '2435', 'a');
INSERT INTO `uw_agency` VALUES ('4607', '2436', 'a');
INSERT INTO `uw_agency` VALUES ('4608', '2437', 'a');
INSERT INTO `uw_agency` VALUES ('4609', '2438', 'a');
INSERT INTO `uw_agency` VALUES ('4610', '2439', 'a');
INSERT INTO `uw_agency` VALUES ('4611', '2440', 'a');
INSERT INTO `uw_agency` VALUES ('4612', '2441', 'a');
INSERT INTO `uw_agency` VALUES ('4613', '2442', 'a');
INSERT INTO `uw_agency` VALUES ('4614', '2443', 'a');
INSERT INTO `uw_agency` VALUES ('4615', '2444', 'a');
INSERT INTO `uw_agency` VALUES ('4616', '2445', 'a');
INSERT INTO `uw_agency` VALUES ('4617', '2446', 'a');
INSERT INTO `uw_agency` VALUES ('4618', '2447', 'a');
INSERT INTO `uw_agency` VALUES ('4619', '2448', 'a');
INSERT INTO `uw_agency` VALUES ('4620', '2449', 'a');
INSERT INTO `uw_agency` VALUES ('4621', '2450', 'a');
INSERT INTO `uw_agency` VALUES ('4622', '2451', 'a');
INSERT INTO `uw_agency` VALUES ('4623', '2452', 'a');
INSERT INTO `uw_agency` VALUES ('4624', '2453', 'a');
INSERT INTO `uw_agency` VALUES ('4625', '2454', 'a');
INSERT INTO `uw_agency` VALUES ('4626', '2455', 'a');
INSERT INTO `uw_agency` VALUES ('4627', '2456', 'a');
INSERT INTO `uw_agency` VALUES ('4628', '2457', 'a');
INSERT INTO `uw_agency` VALUES ('4629', '2458', 'a');
INSERT INTO `uw_agency` VALUES ('4630', '2459', 'a');
INSERT INTO `uw_agency` VALUES ('4631', '2460', 'a');
INSERT INTO `uw_agency` VALUES ('4632', '2461', 'a');
INSERT INTO `uw_agency` VALUES ('4633', '2462', 'a');
INSERT INTO `uw_agency` VALUES ('4634', '2463', 'a');
INSERT INTO `uw_agency` VALUES ('4635', '2464', 'a');
INSERT INTO `uw_agency` VALUES ('4636', '2465', 'a');
INSERT INTO `uw_agency` VALUES ('4637', '2466', 'a');
INSERT INTO `uw_agency` VALUES ('4638', '2467', 'a');
INSERT INTO `uw_agency` VALUES ('4639', '2468', 'a');
INSERT INTO `uw_agency` VALUES ('4640', '2469', 'a');
INSERT INTO `uw_agency` VALUES ('4641', '2470', 'a');
INSERT INTO `uw_agency` VALUES ('4642', '2471', 'a');
INSERT INTO `uw_agency` VALUES ('4643', '2472', 'a');
INSERT INTO `uw_agency` VALUES ('4644', '2473', 'a');
INSERT INTO `uw_agency` VALUES ('4645', '2474', 'a');
INSERT INTO `uw_agency` VALUES ('4646', '2475', 'a');
INSERT INTO `uw_agency` VALUES ('4647', '2476', 'a');
INSERT INTO `uw_agency` VALUES ('4648', '2477', 'a');
INSERT INTO `uw_agency` VALUES ('4649', '2478', 'a');
INSERT INTO `uw_agency` VALUES ('4650', '2479', 'a');
INSERT INTO `uw_agency` VALUES ('4651', '2480', 'a');
INSERT INTO `uw_agency` VALUES ('4652', '2481', 'a');
INSERT INTO `uw_agency` VALUES ('4653', '2482', 'a');
INSERT INTO `uw_agency` VALUES ('4654', '2483', 'a');
INSERT INTO `uw_agency` VALUES ('4655', '2484', 'a');
INSERT INTO `uw_agency` VALUES ('4656', '2485', 'a');
INSERT INTO `uw_agency` VALUES ('4657', '2486', 'a');
INSERT INTO `uw_agency` VALUES ('4658', '2487', 'a');
INSERT INTO `uw_agency` VALUES ('4659', '2488', 'a');
INSERT INTO `uw_agency` VALUES ('4660', '2489', 'a');
INSERT INTO `uw_agency` VALUES ('4661', '2490', 'a');
INSERT INTO `uw_agency` VALUES ('4662', '2491', 'a');
INSERT INTO `uw_agency` VALUES ('4663', '2492', 'a');
INSERT INTO `uw_agency` VALUES ('4664', '2493', 'a');
INSERT INTO `uw_agency` VALUES ('4665', '2494', 'a');
INSERT INTO `uw_agency` VALUES ('4666', '2495', 'a');
INSERT INTO `uw_agency` VALUES ('4667', '2496', 'a');
INSERT INTO `uw_agency` VALUES ('4668', '2497', 'a');
INSERT INTO `uw_agency` VALUES ('4669', '2498', 'a');
INSERT INTO `uw_agency` VALUES ('4670', '2499', 'a');
INSERT INTO `uw_agency` VALUES ('4671', '2500', 'a');
INSERT INTO `uw_agency` VALUES ('4672', '2501', 'a');
INSERT INTO `uw_agency` VALUES ('4673', '2502', 'a');
INSERT INTO `uw_agency` VALUES ('4674', '2503', 'a');
INSERT INTO `uw_agency` VALUES ('4675', '2504', 'a');
INSERT INTO `uw_agency` VALUES ('4676', '2505', 'a');
INSERT INTO `uw_agency` VALUES ('4677', '2506', 'a');
INSERT INTO `uw_agency` VALUES ('4678', '2507', 'a');
INSERT INTO `uw_agency` VALUES ('4679', '2508', 'a');
INSERT INTO `uw_agency` VALUES ('4680', '2509', 'a');
INSERT INTO `uw_agency` VALUES ('4681', '2510', 'a');
INSERT INTO `uw_agency` VALUES ('4682', '2511', 'a');
INSERT INTO `uw_agency` VALUES ('4683', '2512', 'a');
INSERT INTO `uw_agency` VALUES ('4684', '2513', 'a');
INSERT INTO `uw_agency` VALUES ('4685', '2514', 'a');
INSERT INTO `uw_agency` VALUES ('4686', '2515', 'a');
INSERT INTO `uw_agency` VALUES ('4687', '2516', 'a');
INSERT INTO `uw_agency` VALUES ('4688', '2517', 'a');
INSERT INTO `uw_agency` VALUES ('4689', '2518', 'a');
INSERT INTO `uw_agency` VALUES ('4690', '2519', 'a');
INSERT INTO `uw_agency` VALUES ('4691', '2520', 'a');
INSERT INTO `uw_agency` VALUES ('4692', '2521', 'a');
INSERT INTO `uw_agency` VALUES ('4693', '2522', 'a');
INSERT INTO `uw_agency` VALUES ('4694', '2523', 'a');
INSERT INTO `uw_agency` VALUES ('4695', '2524', 'a');
INSERT INTO `uw_agency` VALUES ('4696', '2525', 'a');
INSERT INTO `uw_agency` VALUES ('4697', '2526', 'a');
INSERT INTO `uw_agency` VALUES ('4698', '2527', 'a');
INSERT INTO `uw_agency` VALUES ('4699', '2528', 'a');
INSERT INTO `uw_agency` VALUES ('4700', '2529', 'a');
INSERT INTO `uw_agency` VALUES ('4701', '2530', 'a');
INSERT INTO `uw_agency` VALUES ('4702', '2531', 'a');
INSERT INTO `uw_agency` VALUES ('4703', '2532', 'a');
INSERT INTO `uw_agency` VALUES ('4704', '2533', 'a');
INSERT INTO `uw_agency` VALUES ('4705', '2534', 'a');
INSERT INTO `uw_agency` VALUES ('4706', '2535', 'a');
INSERT INTO `uw_agency` VALUES ('4707', '2536', 'a');
INSERT INTO `uw_agency` VALUES ('4708', '2537', 'a');
INSERT INTO `uw_agency` VALUES ('4709', '2538', 'a');
INSERT INTO `uw_agency` VALUES ('4710', '2539', 'a');
INSERT INTO `uw_agency` VALUES ('4711', '2540', 'a');
INSERT INTO `uw_agency` VALUES ('4712', '2541', 'a');
INSERT INTO `uw_agency` VALUES ('4713', '2542', 'a');
INSERT INTO `uw_agency` VALUES ('4714', '2543', 'a');
INSERT INTO `uw_agency` VALUES ('4715', '2544', 'a');
INSERT INTO `uw_agency` VALUES ('4716', '2545', 'a');
INSERT INTO `uw_agency` VALUES ('4717', '2546', 'a');
INSERT INTO `uw_agency` VALUES ('4718', '2547', 'a');
INSERT INTO `uw_agency` VALUES ('4719', '2548', 'a');
INSERT INTO `uw_agency` VALUES ('4720', '2549', 'a');
INSERT INTO `uw_agency` VALUES ('4721', '2550', 'a');
INSERT INTO `uw_agency` VALUES ('4722', '2551', 'a');
INSERT INTO `uw_agency` VALUES ('4723', '2552', 'a');
INSERT INTO `uw_agency` VALUES ('4724', '2553', 'a');
INSERT INTO `uw_agency` VALUES ('4725', '2554', 'a');
INSERT INTO `uw_agency` VALUES ('4726', '2555', 'a');
INSERT INTO `uw_agency` VALUES ('4727', '2556', 'a');
INSERT INTO `uw_agency` VALUES ('4728', '2557', 'a');
INSERT INTO `uw_agency` VALUES ('4729', '2558', 'a');
INSERT INTO `uw_agency` VALUES ('4730', '2559', 'a');
INSERT INTO `uw_agency` VALUES ('4731', '2560', 'a');
INSERT INTO `uw_agency` VALUES ('4732', '2561', 'a');
INSERT INTO `uw_agency` VALUES ('4733', '2562', 'a');
INSERT INTO `uw_agency` VALUES ('4734', '2563', 'a');
INSERT INTO `uw_agency` VALUES ('4735', '2564', 'a');
INSERT INTO `uw_agency` VALUES ('4736', '2565', 'a');
INSERT INTO `uw_agency` VALUES ('4737', '2566', 'a');
INSERT INTO `uw_agency` VALUES ('4738', '2567', 'a');
INSERT INTO `uw_agency` VALUES ('4739', '2568', 'a');
INSERT INTO `uw_agency` VALUES ('4740', '2569', 'a');
INSERT INTO `uw_agency` VALUES ('4741', '2570', 'a');
INSERT INTO `uw_agency` VALUES ('4742', '2571', 'a');
INSERT INTO `uw_agency` VALUES ('4743', '2572', 'a');
INSERT INTO `uw_agency` VALUES ('4744', '2573', 'a');
INSERT INTO `uw_agency` VALUES ('4745', '2574', 'a');
INSERT INTO `uw_agency` VALUES ('4746', '2575', 'a');
INSERT INTO `uw_agency` VALUES ('4747', '2576', 'a');
INSERT INTO `uw_agency` VALUES ('4748', '2577', 'a');
INSERT INTO `uw_agency` VALUES ('4749', '2578', 'a');
INSERT INTO `uw_agency` VALUES ('4750', '2579', 'a');
INSERT INTO `uw_agency` VALUES ('4751', '2580', 'a');
INSERT INTO `uw_agency` VALUES ('4752', '2581', 'a');
INSERT INTO `uw_agency` VALUES ('4753', '2582', 'a');
INSERT INTO `uw_agency` VALUES ('4754', '2583', 'a');
INSERT INTO `uw_agency` VALUES ('4755', '2584', 'a');
INSERT INTO `uw_agency` VALUES ('4756', '2585', 'a');
INSERT INTO `uw_agency` VALUES ('4757', '2586', 'a');
INSERT INTO `uw_agency` VALUES ('4758', '2587', 'a');
INSERT INTO `uw_agency` VALUES ('4759', '2588', 'a');
INSERT INTO `uw_agency` VALUES ('4760', '2589', 'a');
INSERT INTO `uw_agency` VALUES ('4761', '2590', 'a');
INSERT INTO `uw_agency` VALUES ('4762', '2591', 'a');
INSERT INTO `uw_agency` VALUES ('4763', '2592', 'a');
INSERT INTO `uw_agency` VALUES ('4764', '2593', 'a');
INSERT INTO `uw_agency` VALUES ('4765', '2594', 'a');
INSERT INTO `uw_agency` VALUES ('4766', '2595', 'a');
INSERT INTO `uw_agency` VALUES ('4767', '2596', 'a');
INSERT INTO `uw_agency` VALUES ('4768', '2597', 'a');
INSERT INTO `uw_agency` VALUES ('4769', '2598', 'a');
INSERT INTO `uw_agency` VALUES ('4770', '2599', 'a');
INSERT INTO `uw_agency` VALUES ('4771', '2600', 'a');
INSERT INTO `uw_agency` VALUES ('4772', '2601', 'a');
INSERT INTO `uw_agency` VALUES ('4773', '2602', 'a');
INSERT INTO `uw_agency` VALUES ('4774', '2603', 'a');
INSERT INTO `uw_agency` VALUES ('4775', '2604', 'a');
INSERT INTO `uw_agency` VALUES ('4776', '2605', 'a');
INSERT INTO `uw_agency` VALUES ('4777', '2606', 'a');
INSERT INTO `uw_agency` VALUES ('4778', '2607', 'a');
INSERT INTO `uw_agency` VALUES ('4779', '2608', 'a');
INSERT INTO `uw_agency` VALUES ('4780', '2609', 'a');
INSERT INTO `uw_agency` VALUES ('4781', '2610', 'a');
INSERT INTO `uw_agency` VALUES ('4782', '2611', 'a');
INSERT INTO `uw_agency` VALUES ('4783', '2612', 'a');
INSERT INTO `uw_agency` VALUES ('4784', '2613', 'a');
INSERT INTO `uw_agency` VALUES ('4785', '2614', 'a');
INSERT INTO `uw_agency` VALUES ('4786', '2615', 'a');
INSERT INTO `uw_agency` VALUES ('4787', '2616', 'a');
INSERT INTO `uw_agency` VALUES ('4788', '2617', 'a');
INSERT INTO `uw_agency` VALUES ('4789', '2618', 'a');
INSERT INTO `uw_agency` VALUES ('4790', '2619', 'a');
INSERT INTO `uw_agency` VALUES ('4791', '2620', 'a');
INSERT INTO `uw_agency` VALUES ('4792', '2621', 'a');
INSERT INTO `uw_agency` VALUES ('4793', '2622', 'a');
INSERT INTO `uw_agency` VALUES ('4794', '2623', 'a');
INSERT INTO `uw_agency` VALUES ('4795', '2624', 'a');
INSERT INTO `uw_agency` VALUES ('4796', '2625', 'a');
INSERT INTO `uw_agency` VALUES ('4797', '2626', 'a');
INSERT INTO `uw_agency` VALUES ('4798', '2627', 'a');
INSERT INTO `uw_agency` VALUES ('4799', '2628', 'a');
INSERT INTO `uw_agency` VALUES ('4800', '2629', 'a');
INSERT INTO `uw_agency` VALUES ('4801', '2630', 'a');
INSERT INTO `uw_agency` VALUES ('4802', '2631', 'a');
INSERT INTO `uw_agency` VALUES ('4803', '2632', 'a');
INSERT INTO `uw_agency` VALUES ('4804', '2633', 'a');
INSERT INTO `uw_agency` VALUES ('4805', '2634', 'a');
INSERT INTO `uw_agency` VALUES ('4806', '2635', 'a');
INSERT INTO `uw_agency` VALUES ('4807', '2636', 'a');
INSERT INTO `uw_agency` VALUES ('4808', '2637', 'a');
INSERT INTO `uw_agency` VALUES ('4809', '2638', 'a');
INSERT INTO `uw_agency` VALUES ('4810', '2639', 'a');
INSERT INTO `uw_agency` VALUES ('4811', '2640', 'a');
INSERT INTO `uw_agency` VALUES ('4812', '2641', 'a');
INSERT INTO `uw_agency` VALUES ('4813', '2642', 'a');
INSERT INTO `uw_agency` VALUES ('4814', '2643', 'a');
INSERT INTO `uw_agency` VALUES ('4815', '2644', 'a');
INSERT INTO `uw_agency` VALUES ('4816', '2645', 'a');
INSERT INTO `uw_agency` VALUES ('4817', '2646', 'a');
INSERT INTO `uw_agency` VALUES ('4818', '2647', 'a');
INSERT INTO `uw_agency` VALUES ('4819', '2648', 'a');
INSERT INTO `uw_agency` VALUES ('4820', '2649', 'a');
INSERT INTO `uw_agency` VALUES ('4821', '2650', 'a');
INSERT INTO `uw_agency` VALUES ('4822', '2651', 'a');
INSERT INTO `uw_agency` VALUES ('4823', '2652', 'a');
INSERT INTO `uw_agency` VALUES ('4824', '2653', 'a');
INSERT INTO `uw_agency` VALUES ('4825', '2654', 'a');
INSERT INTO `uw_agency` VALUES ('4826', '2655', 'a');
INSERT INTO `uw_agency` VALUES ('4827', '2656', 'a');
INSERT INTO `uw_agency` VALUES ('4828', '2657', 'a');
INSERT INTO `uw_agency` VALUES ('4829', '2658', 'a');
INSERT INTO `uw_agency` VALUES ('4830', '2659', 'a');
INSERT INTO `uw_agency` VALUES ('4831', '2660', 'a');
INSERT INTO `uw_agency` VALUES ('4832', '2661', 'a');
INSERT INTO `uw_agency` VALUES ('4833', '2662', 'a');
INSERT INTO `uw_agency` VALUES ('4834', '2663', 'a');
INSERT INTO `uw_agency` VALUES ('4835', '2664', 'a');
INSERT INTO `uw_agency` VALUES ('4836', '2665', 'a');
INSERT INTO `uw_agency` VALUES ('4837', '2666', 'a');
INSERT INTO `uw_agency` VALUES ('4838', '2667', 'a');
INSERT INTO `uw_agency` VALUES ('4839', '2668', 'a');
INSERT INTO `uw_agency` VALUES ('4840', '2669', 'a');
INSERT INTO `uw_agency` VALUES ('4841', '2670', 'a');
INSERT INTO `uw_agency` VALUES ('4842', '2671', 'a');
INSERT INTO `uw_agency` VALUES ('4843', '2672', 'a');
INSERT INTO `uw_agency` VALUES ('4844', '2673', 'a');
INSERT INTO `uw_agency` VALUES ('4845', '2674', 'a');
INSERT INTO `uw_agency` VALUES ('4846', '2675', 'a');
INSERT INTO `uw_agency` VALUES ('4847', '2676', 'a');
INSERT INTO `uw_agency` VALUES ('4848', '2677', 'a');
INSERT INTO `uw_agency` VALUES ('4849', '2678', 'a');
INSERT INTO `uw_agency` VALUES ('4850', '2679', 'a');
INSERT INTO `uw_agency` VALUES ('4851', '2680', 'a');
INSERT INTO `uw_agency` VALUES ('4852', '2681', 'a');
INSERT INTO `uw_agency` VALUES ('4853', '2682', 'a');
INSERT INTO `uw_agency` VALUES ('4854', '2683', 'a');
INSERT INTO `uw_agency` VALUES ('4855', '2684', 'a');
INSERT INTO `uw_agency` VALUES ('4856', '2685', 'a');
INSERT INTO `uw_agency` VALUES ('4857', '2686', 'a');
INSERT INTO `uw_agency` VALUES ('4858', '2687', 'a');
INSERT INTO `uw_agency` VALUES ('4859', '2688', 'a');
INSERT INTO `uw_agency` VALUES ('4860', '2689', 'a');
INSERT INTO `uw_agency` VALUES ('4861', '2690', 'a');
INSERT INTO `uw_agency` VALUES ('4862', '2691', 'a');
INSERT INTO `uw_agency` VALUES ('4863', '2692', 'a');
INSERT INTO `uw_agency` VALUES ('4864', '2693', 'a');
INSERT INTO `uw_agency` VALUES ('4865', '2694', 'a');
INSERT INTO `uw_agency` VALUES ('4866', '2695', 'a');
INSERT INTO `uw_agency` VALUES ('4867', '2696', 'a');
INSERT INTO `uw_agency` VALUES ('4868', '2697', 'a');
INSERT INTO `uw_agency` VALUES ('4869', '2698', 'a');
INSERT INTO `uw_agency` VALUES ('4870', '2699', 'a');
INSERT INTO `uw_agency` VALUES ('4871', '2700', 'a');
INSERT INTO `uw_agency` VALUES ('4872', '2701', 'a');
INSERT INTO `uw_agency` VALUES ('4873', '2702', 'a');
INSERT INTO `uw_agency` VALUES ('4874', '2703', 'a');
INSERT INTO `uw_agency` VALUES ('4875', '2704', 'a');
INSERT INTO `uw_agency` VALUES ('4876', '2705', 'a');
INSERT INTO `uw_agency` VALUES ('4877', '2706', 'a');
INSERT INTO `uw_agency` VALUES ('4878', '2707', 'a');
INSERT INTO `uw_agency` VALUES ('4879', '2708', 'a');
INSERT INTO `uw_agency` VALUES ('4880', '2709', 'a');
INSERT INTO `uw_agency` VALUES ('4881', '2710', 'a');
INSERT INTO `uw_agency` VALUES ('4882', '2711', 'a');
INSERT INTO `uw_agency` VALUES ('4883', '2712', 'a');
INSERT INTO `uw_agency` VALUES ('4884', '2713', 'a');
INSERT INTO `uw_agency` VALUES ('4885', '2714', 'a');
INSERT INTO `uw_agency` VALUES ('4886', '2715', 'a');
INSERT INTO `uw_agency` VALUES ('4887', '2716', 'a');
INSERT INTO `uw_agency` VALUES ('4888', '2717', 'a');
INSERT INTO `uw_agency` VALUES ('4889', '2718', 'a');
INSERT INTO `uw_agency` VALUES ('4890', '2719', 'a');
INSERT INTO `uw_agency` VALUES ('4891', '2720', 'a');
INSERT INTO `uw_agency` VALUES ('4892', '2721', 'a');
INSERT INTO `uw_agency` VALUES ('4893', '2722', 'a');
INSERT INTO `uw_agency` VALUES ('4894', '2723', 'a');
INSERT INTO `uw_agency` VALUES ('4895', '2724', 'a');
INSERT INTO `uw_agency` VALUES ('4896', '2725', 'a');
INSERT INTO `uw_agency` VALUES ('4897', '2726', 'a');
INSERT INTO `uw_agency` VALUES ('4898', '2727', 'a');
INSERT INTO `uw_agency` VALUES ('4899', '2728', 'a');
INSERT INTO `uw_agency` VALUES ('4900', '2729', 'a');
INSERT INTO `uw_agency` VALUES ('4901', '2730', 'a');
INSERT INTO `uw_agency` VALUES ('4902', '2731', 'a');
INSERT INTO `uw_agency` VALUES ('4903', '2732', 'a');
INSERT INTO `uw_agency` VALUES ('4904', '2733', 'a');
INSERT INTO `uw_agency` VALUES ('4905', '2734', 'a');
INSERT INTO `uw_agency` VALUES ('4906', '2735', 'a');
INSERT INTO `uw_agency` VALUES ('4907', '2736', 'a');
INSERT INTO `uw_agency` VALUES ('4908', '2737', 'a');
INSERT INTO `uw_agency` VALUES ('4909', '2738', 'a');
INSERT INTO `uw_agency` VALUES ('4910', '2739', 'a');
INSERT INTO `uw_agency` VALUES ('4911', '2740', 'a');
INSERT INTO `uw_agency` VALUES ('4912', '2741', 'a');
INSERT INTO `uw_agency` VALUES ('4913', '2742', 'a');
INSERT INTO `uw_agency` VALUES ('4914', '2743', 'a');
INSERT INTO `uw_agency` VALUES ('4915', '2744', 'a');
INSERT INTO `uw_agency` VALUES ('4916', '2745', 'a');
INSERT INTO `uw_agency` VALUES ('4917', '2746', 'a');
INSERT INTO `uw_agency` VALUES ('4918', '2747', 'a');
INSERT INTO `uw_agency` VALUES ('4919', '2748', 'a');
INSERT INTO `uw_agency` VALUES ('4920', '2749', 'a');
INSERT INTO `uw_agency` VALUES ('4921', '2750', 'a');
INSERT INTO `uw_agency` VALUES ('4922', '2751', 'a');
INSERT INTO `uw_agency` VALUES ('4923', '2752', 'a');
INSERT INTO `uw_agency` VALUES ('4924', '2753', 'a');
INSERT INTO `uw_agency` VALUES ('4925', '2754', 'a');
INSERT INTO `uw_agency` VALUES ('4926', '2755', 'a');
INSERT INTO `uw_agency` VALUES ('4927', '2756', 'a');
INSERT INTO `uw_agency` VALUES ('4928', '2757', 'a');
INSERT INTO `uw_agency` VALUES ('4929', '2758', 'a');
INSERT INTO `uw_agency` VALUES ('4930', '2759', 'a');
INSERT INTO `uw_agency` VALUES ('4931', '2760', 'a');
INSERT INTO `uw_agency` VALUES ('4932', '2761', 'a');
INSERT INTO `uw_agency` VALUES ('4933', '2762', 'a');
INSERT INTO `uw_agency` VALUES ('4934', '2763', 'a');
INSERT INTO `uw_agency` VALUES ('4935', '2764', 'a');
INSERT INTO `uw_agency` VALUES ('4936', '2765', 'a');
INSERT INTO `uw_agency` VALUES ('4937', '2766', 'a');
INSERT INTO `uw_agency` VALUES ('4938', '2767', 'a');
INSERT INTO `uw_agency` VALUES ('4939', '2768', 'a');
INSERT INTO `uw_agency` VALUES ('4940', '2769', 'a');
INSERT INTO `uw_agency` VALUES ('4941', '2770', 'a');
INSERT INTO `uw_agency` VALUES ('4942', '2771', 'a');
INSERT INTO `uw_agency` VALUES ('4943', '2772', 'a');
INSERT INTO `uw_agency` VALUES ('4944', '2773', 'a');
INSERT INTO `uw_agency` VALUES ('4945', '2774', 'a');
INSERT INTO `uw_agency` VALUES ('4946', '2775', 'a');
INSERT INTO `uw_agency` VALUES ('4947', '2776', 'a');
INSERT INTO `uw_agency` VALUES ('4948', '2777', 'a');
INSERT INTO `uw_agency` VALUES ('4949', '2778', 'a');
INSERT INTO `uw_agency` VALUES ('4950', '2779', 'a');
INSERT INTO `uw_agency` VALUES ('4951', '2780', 'a');
INSERT INTO `uw_agency` VALUES ('4952', '2781', 'a');
INSERT INTO `uw_agency` VALUES ('4953', '2782', 'a');
INSERT INTO `uw_agency` VALUES ('4954', '2783', 'a');
INSERT INTO `uw_agency` VALUES ('4955', '2784', 'a');
INSERT INTO `uw_agency` VALUES ('4956', '2785', 'a');
INSERT INTO `uw_agency` VALUES ('4957', '2786', 'a');
INSERT INTO `uw_agency` VALUES ('4958', '2787', 'a');
INSERT INTO `uw_agency` VALUES ('4959', '2788', 'a');
INSERT INTO `uw_agency` VALUES ('4960', '2789', 'a');
INSERT INTO `uw_agency` VALUES ('4961', '2790', 'a');
INSERT INTO `uw_agency` VALUES ('4962', '2791', 'a');
INSERT INTO `uw_agency` VALUES ('4963', '2792', 'a');
INSERT INTO `uw_agency` VALUES ('4964', '2793', 'a');
INSERT INTO `uw_agency` VALUES ('4965', '2794', 'a');
INSERT INTO `uw_agency` VALUES ('4966', '2795', 'a');
INSERT INTO `uw_agency` VALUES ('4967', '2796', 'a');
INSERT INTO `uw_agency` VALUES ('4968', '2797', 'a');
INSERT INTO `uw_agency` VALUES ('4969', '2798', 'a');
INSERT INTO `uw_agency` VALUES ('4970', '2799', 'a');
INSERT INTO `uw_agency` VALUES ('4971', '2800', 'a');
INSERT INTO `uw_agency` VALUES ('4972', '2801', 'a');
INSERT INTO `uw_agency` VALUES ('4973', '2802', 'a');
INSERT INTO `uw_agency` VALUES ('4974', '2803', 'a');
INSERT INTO `uw_agency` VALUES ('4975', '2804', 'a');
INSERT INTO `uw_agency` VALUES ('4976', '2805', 'a');
INSERT INTO `uw_agency` VALUES ('4977', '2806', 'a');
INSERT INTO `uw_agency` VALUES ('4978', '2807', 'a');
INSERT INTO `uw_agency` VALUES ('4979', '2808', 'a');
INSERT INTO `uw_agency` VALUES ('4980', '2809', 'a');
INSERT INTO `uw_agency` VALUES ('4981', '2810', 'a');
INSERT INTO `uw_agency` VALUES ('4982', '2811', 'a');
INSERT INTO `uw_agency` VALUES ('4983', '2812', 'a');
INSERT INTO `uw_agency` VALUES ('4984', '2813', 'a');
INSERT INTO `uw_agency` VALUES ('4985', '2814', 'a');
INSERT INTO `uw_agency` VALUES ('4986', '2815', 'a');
INSERT INTO `uw_agency` VALUES ('4987', '2816', 'a');
INSERT INTO `uw_agency` VALUES ('4988', '2817', 'a');
INSERT INTO `uw_agency` VALUES ('4989', '2818', 'a');
INSERT INTO `uw_agency` VALUES ('4990', '2819', 'a');
INSERT INTO `uw_agency` VALUES ('4991', '2820', 'a');
INSERT INTO `uw_agency` VALUES ('4992', '2821', 'a');
INSERT INTO `uw_agency` VALUES ('4993', '2822', 'a');
INSERT INTO `uw_agency` VALUES ('4994', '2823', 'a');
INSERT INTO `uw_agency` VALUES ('4995', '2824', 'a');
INSERT INTO `uw_agency` VALUES ('4996', '2825', 'a');
INSERT INTO `uw_agency` VALUES ('4997', '2826', 'a');
INSERT INTO `uw_agency` VALUES ('4998', '2827', 'a');
INSERT INTO `uw_agency` VALUES ('4999', '2828', 'a');
INSERT INTO `uw_agency` VALUES ('5000', '2829', 'a');
INSERT INTO `uw_agency` VALUES ('5001', '2830', 'a');
INSERT INTO `uw_agency` VALUES ('5002', '2831', 'a');
INSERT INTO `uw_agency` VALUES ('5003', '2832', 'a');
INSERT INTO `uw_agency` VALUES ('5004', '2833', 'a');
INSERT INTO `uw_agency` VALUES ('5005', '2834', 'a');
INSERT INTO `uw_agency` VALUES ('5006', '2835', 'a');
INSERT INTO `uw_agency` VALUES ('5007', '2836', 'a');
INSERT INTO `uw_agency` VALUES ('5008', '2837', 'a');
INSERT INTO `uw_agency` VALUES ('5009', '2838', 'a');
INSERT INTO `uw_agency` VALUES ('5010', '2839', 'a');
INSERT INTO `uw_agency` VALUES ('5011', '2840', 'a');
INSERT INTO `uw_agency` VALUES ('5012', '2841', 'a');
INSERT INTO `uw_agency` VALUES ('5013', '2842', 'a');
INSERT INTO `uw_agency` VALUES ('5014', '2843', 'a');
INSERT INTO `uw_agency` VALUES ('5015', '2844', 'a');
INSERT INTO `uw_agency` VALUES ('5016', '2845', 'a');
INSERT INTO `uw_agency` VALUES ('5017', '2846', 'a');
INSERT INTO `uw_agency` VALUES ('5018', '2847', 'a');
INSERT INTO `uw_agency` VALUES ('5019', '2848', 'a');
INSERT INTO `uw_agency` VALUES ('5020', '2849', 'a');
INSERT INTO `uw_agency` VALUES ('5021', '2850', 'a');
INSERT INTO `uw_agency` VALUES ('5022', '2851', 'a');
INSERT INTO `uw_agency` VALUES ('5023', '2852', 'a');
INSERT INTO `uw_agency` VALUES ('5024', '2853', 'a');
INSERT INTO `uw_agency` VALUES ('5025', '2854', 'a');
INSERT INTO `uw_agency` VALUES ('5026', '2855', 'a');
INSERT INTO `uw_agency` VALUES ('5027', '2856', 'a');
INSERT INTO `uw_agency` VALUES ('5028', '2857', 'a');
INSERT INTO `uw_agency` VALUES ('5029', '2858', 'a');
INSERT INTO `uw_agency` VALUES ('5030', '2859', 'a');
INSERT INTO `uw_agency` VALUES ('5031', '2860', 'a');
INSERT INTO `uw_agency` VALUES ('5032', '2861', 'a');
INSERT INTO `uw_agency` VALUES ('5033', '2862', 'a');
INSERT INTO `uw_agency` VALUES ('5034', '2863', 'a');
INSERT INTO `uw_agency` VALUES ('5035', '2864', 'a');
INSERT INTO `uw_agency` VALUES ('5036', '2865', 'a');
INSERT INTO `uw_agency` VALUES ('5037', '2866', 'a');
INSERT INTO `uw_agency` VALUES ('5038', '2867', 'a');
INSERT INTO `uw_agency` VALUES ('5039', '2868', 'a');
INSERT INTO `uw_agency` VALUES ('5040', '2869', 'a');
INSERT INTO `uw_agency` VALUES ('5041', '2870', 'a');
INSERT INTO `uw_agency` VALUES ('5042', '2871', 'a');
INSERT INTO `uw_agency` VALUES ('5043', '2872', 'a');
INSERT INTO `uw_agency` VALUES ('5044', '2873', 'a');
INSERT INTO `uw_agency` VALUES ('5045', '2874', 'a');
INSERT INTO `uw_agency` VALUES ('5046', '2875', 'a');
INSERT INTO `uw_agency` VALUES ('5047', '2876', 'a');
INSERT INTO `uw_agency` VALUES ('5048', '2877', 'a');
INSERT INTO `uw_agency` VALUES ('5049', '2878', 'a');
INSERT INTO `uw_agency` VALUES ('5050', '2879', 'a');
INSERT INTO `uw_agency` VALUES ('5051', '2880', 'a');
INSERT INTO `uw_agency` VALUES ('5052', '2881', 'a');
INSERT INTO `uw_agency` VALUES ('5053', '2882', 'a');
INSERT INTO `uw_agency` VALUES ('5054', '2883', 'a');
INSERT INTO `uw_agency` VALUES ('5055', '2884', 'a');
INSERT INTO `uw_agency` VALUES ('5056', '2885', 'a');
INSERT INTO `uw_agency` VALUES ('5057', '2886', 'a');
INSERT INTO `uw_agency` VALUES ('5058', '2887', 'a');
INSERT INTO `uw_agency` VALUES ('5059', '2888', 'a');
INSERT INTO `uw_agency` VALUES ('5060', '2889', 'a');
INSERT INTO `uw_agency` VALUES ('5061', '2890', 'a');
INSERT INTO `uw_agency` VALUES ('5062', '2891', 'a');
INSERT INTO `uw_agency` VALUES ('5063', '2892', 'a');
INSERT INTO `uw_agency` VALUES ('5064', '2893', 'a');
INSERT INTO `uw_agency` VALUES ('5065', '2894', 'a');
INSERT INTO `uw_agency` VALUES ('5066', '2895', 'a');
INSERT INTO `uw_agency` VALUES ('5067', '2896', 'a');
INSERT INTO `uw_agency` VALUES ('5068', '2897', 'a');
INSERT INTO `uw_agency` VALUES ('5069', '2898', 'a');
INSERT INTO `uw_agency` VALUES ('5070', '2899', 'a');
INSERT INTO `uw_agency` VALUES ('5071', '2900', 'a');
INSERT INTO `uw_agency` VALUES ('5072', '2901', 'a');
INSERT INTO `uw_agency` VALUES ('5073', '2902', 'a');
INSERT INTO `uw_agency` VALUES ('5074', '2903', 'a');
INSERT INTO `uw_agency` VALUES ('5075', '2904', 'a');
INSERT INTO `uw_agency` VALUES ('5076', '2905', 'a');
INSERT INTO `uw_agency` VALUES ('5077', '2906', 'a');
INSERT INTO `uw_agency` VALUES ('5078', '2907', 'a');
INSERT INTO `uw_agency` VALUES ('5079', '2908', 'a');
INSERT INTO `uw_agency` VALUES ('5080', '2909', 'a');
INSERT INTO `uw_agency` VALUES ('5081', '2910', 'a');
INSERT INTO `uw_agency` VALUES ('5082', '2911', 'a');
INSERT INTO `uw_agency` VALUES ('5083', '2912', 'a');
INSERT INTO `uw_agency` VALUES ('5084', '2913', 'a');
INSERT INTO `uw_agency` VALUES ('5085', '2914', 'a');
INSERT INTO `uw_agency` VALUES ('5086', '2915', 'a');
INSERT INTO `uw_agency` VALUES ('5087', '2916', 'a');
INSERT INTO `uw_agency` VALUES ('5088', '2917', 'a');
INSERT INTO `uw_agency` VALUES ('5089', '2918', 'a');
INSERT INTO `uw_agency` VALUES ('5090', '2919', 'a');
INSERT INTO `uw_agency` VALUES ('5091', '2920', 'a');
INSERT INTO `uw_agency` VALUES ('5092', '2921', 'a');
INSERT INTO `uw_agency` VALUES ('5093', '2922', 'a');
INSERT INTO `uw_agency` VALUES ('5094', '2923', 'a');
INSERT INTO `uw_agency` VALUES ('5095', '2924', 'a');
INSERT INTO `uw_agency` VALUES ('5096', '2925', 'a');
INSERT INTO `uw_agency` VALUES ('5097', '2926', 'a');
INSERT INTO `uw_agency` VALUES ('5098', '2927', 'a');
INSERT INTO `uw_agency` VALUES ('5099', '2928', 'a');
INSERT INTO `uw_agency` VALUES ('5100', '2929', 'a');
INSERT INTO `uw_agency` VALUES ('5101', '2930', 'a');
INSERT INTO `uw_agency` VALUES ('5102', '2931', 'a');
INSERT INTO `uw_agency` VALUES ('5103', '2932', 'a');
INSERT INTO `uw_agency` VALUES ('5104', '2933', 'a');
INSERT INTO `uw_agency` VALUES ('5105', '2934', 'a');
INSERT INTO `uw_agency` VALUES ('5106', '2935', 'a');
INSERT INTO `uw_agency` VALUES ('5107', '2936', 'a');
INSERT INTO `uw_agency` VALUES ('5108', '2937', 'a');
INSERT INTO `uw_agency` VALUES ('5109', '2938', 'a');
INSERT INTO `uw_agency` VALUES ('5110', '2939', 'a');
INSERT INTO `uw_agency` VALUES ('5111', '2940', 'a');
INSERT INTO `uw_agency` VALUES ('5112', '2941', 'a');
INSERT INTO `uw_agency` VALUES ('5113', '2942', 'a');
INSERT INTO `uw_agency` VALUES ('5114', '2943', 'a');
INSERT INTO `uw_agency` VALUES ('5115', '2944', 'a');
INSERT INTO `uw_agency` VALUES ('5116', '2945', 'a');
INSERT INTO `uw_agency` VALUES ('5117', '2946', 'a');
INSERT INTO `uw_agency` VALUES ('5118', '2947', 'a');
INSERT INTO `uw_agency` VALUES ('5119', '2948', 'a');
INSERT INTO `uw_agency` VALUES ('5120', '2949', 'a');
INSERT INTO `uw_agency` VALUES ('5121', '2950', 'a');
INSERT INTO `uw_agency` VALUES ('5122', '2951', 'a');
INSERT INTO `uw_agency` VALUES ('5123', '2952', 'a');
INSERT INTO `uw_agency` VALUES ('5124', '2953', 'a');
INSERT INTO `uw_agency` VALUES ('5125', '2954', 'a');
INSERT INTO `uw_agency` VALUES ('5126', '2955', 'a');
INSERT INTO `uw_agency` VALUES ('5127', '2956', 'a');
INSERT INTO `uw_agency` VALUES ('5128', '2957', 'a');
INSERT INTO `uw_agency` VALUES ('5129', '2958', 'a');
INSERT INTO `uw_agency` VALUES ('5130', '2959', 'a');
INSERT INTO `uw_agency` VALUES ('5131', '2960', 'a');
INSERT INTO `uw_agency` VALUES ('5132', '2961', 'a');
INSERT INTO `uw_agency` VALUES ('5133', '2962', 'a');
INSERT INTO `uw_agency` VALUES ('5134', '2963', 'a');
INSERT INTO `uw_agency` VALUES ('5135', '2964', 'a');
INSERT INTO `uw_agency` VALUES ('5136', '2965', 'a');
INSERT INTO `uw_agency` VALUES ('5137', '2966', 'a');
INSERT INTO `uw_agency` VALUES ('5138', '2967', 'a');
INSERT INTO `uw_agency` VALUES ('5139', '2968', 'a');
INSERT INTO `uw_agency` VALUES ('5140', '2969', 'a');
INSERT INTO `uw_agency` VALUES ('5141', '2970', 'a');
INSERT INTO `uw_agency` VALUES ('5142', '2971', 'a');
INSERT INTO `uw_agency` VALUES ('5143', '2972', 'a');
INSERT INTO `uw_agency` VALUES ('5144', '2973', 'a');
INSERT INTO `uw_agency` VALUES ('5145', '2974', 'a');
INSERT INTO `uw_agency` VALUES ('5146', '2975', 'a');
INSERT INTO `uw_agency` VALUES ('5147', '2976', 'a');
INSERT INTO `uw_agency` VALUES ('5148', '2977', 'a');
INSERT INTO `uw_agency` VALUES ('5149', '2978', 'a');
INSERT INTO `uw_agency` VALUES ('5150', '2979', 'a');
INSERT INTO `uw_agency` VALUES ('5151', '2980', 'a');
INSERT INTO `uw_agency` VALUES ('5152', '2981', 'a');
INSERT INTO `uw_agency` VALUES ('5153', '2982', 'a');
INSERT INTO `uw_agency` VALUES ('5154', '2983', 'a');
INSERT INTO `uw_agency` VALUES ('5155', '2984', 'a');
INSERT INTO `uw_agency` VALUES ('5156', '2985', 'a');
INSERT INTO `uw_agency` VALUES ('5157', '2986', 'a');
INSERT INTO `uw_agency` VALUES ('5158', '2987', 'a');
INSERT INTO `uw_agency` VALUES ('5159', '2988', 'a');
INSERT INTO `uw_agency` VALUES ('5160', '2989', 'a');
INSERT INTO `uw_agency` VALUES ('5161', '2990', 'a');
INSERT INTO `uw_agency` VALUES ('5162', '2991', 'a');
INSERT INTO `uw_agency` VALUES ('5163', '2992', 'a');
INSERT INTO `uw_agency` VALUES ('5164', '2993', 'a');
INSERT INTO `uw_agency` VALUES ('5165', '2994', 'a');
INSERT INTO `uw_agency` VALUES ('5166', '2995', 'a');
INSERT INTO `uw_agency` VALUES ('5167', '2996', 'a');
INSERT INTO `uw_agency` VALUES ('5168', '2997', 'a');
INSERT INTO `uw_agency` VALUES ('5169', '2998', 'a');
INSERT INTO `uw_agency` VALUES ('5170', '2999', 'a');
INSERT INTO `uw_agency` VALUES ('5171', '3000', 'a');

-- ----------------------------
-- Table structure for uw_article
-- ----------------------------
DROP TABLE IF EXISTS `uw_article`;
CREATE TABLE `uw_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `ishome` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `title` char(100) NOT NULL DEFAULT '',
  `content` longtext,
  `ctime` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_article
-- ----------------------------
INSERT INTO `uw_article` VALUES ('47', '36', '0', '0', '1', '郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭', '<div style=\"margin:0px;padding:0px;border:0px;font-family:STHeiti, &quot;line-height:normal;white-space:normal;widows:1;background-color:#F8F8F8;\">\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		翻看何洁的微博，几乎是连续几个日夜忙着工作，内容越发的无奈，好像真的坐实要离婚的消息了。\r\n	</p>\r\n	<p class=\"img-wrapper-embedded\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:357.057px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/134c0003b98ac36e86c9\" img_width=\"530\" img_height=\"498\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"0\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		网友们纷纷表示：希望你保重身体，再大的困难和挫折，都有咱们盒饭在。何洁这样的一个乐观开朗的姑娘，为何会遇见这样的一个人呢？\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:373.871px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/12dd00031ad83d31a457\" img_width=\"434\" img_height=\"427\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"1\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		郝子铭在微博曾经写道：感恩爱我的人，让我变成更好的人，不管怎样我都会感恩曾经在我身上发生的一切。言辞中好像是在说抱歉，也许是说给何洁听，也许另有所指，但毋庸置疑的是他肯定是犯错了。也许真像传言说的，嫖娼被抓了或者怎样。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:310.706px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/134c0003ba325c7c9469\" img_width=\"510\" img_height=\"417\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"2\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		爱情本就是你情我愿，离婚也不是一个人的错，看着何洁这么辛苦的照片，小编内心五味杂陈。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:251.41px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/131e000f2217a7ab973c\" img_width=\"461\" img_height=\"305\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"3\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		无论结果如何，希望何洁能够挺过去，也是是为了孩子，也许是为了自己，至少要活的精彩。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:216.6px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/13280001ae92b4fdd744\" img_width=\"500\" img_height=\"285\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"4\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		有人正闹离婚，也有人正在享受婚姻，毕竟这个世界不是全部人都不幸，要不然，这世界老早就被不幸淹没了！郭晶晶一家近日现身机场，画面看起来很是温馨有爱。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:208.335px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/134c0007548bc685a267\" img_width=\"943\" img_height=\"517\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"5\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		才3岁多的霍中曦似乎对什么都很好奇，坐在BB车上还到处探头望着。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:374.916px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/134a000431966678067e\" img_width=\"598\" img_height=\"590\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"6\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		夫妻两个能一个人专门推着BB车，照顾儿子一举一动，另一个人就负责拎包拎行李了。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:557.821px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/134d00055ffa3f8af046\" img_width=\"468\" img_height=\"687\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"7\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		看着霍启刚拎着大包背着小包穿梭在机场拥挤的人群中，虽然表情有点疲累，却也背着大包小包，紧跟在妻儿身后，做一个有担当的老爸和丈夫。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:515.602px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/134a000431cb23412a08\" img_width=\"482\" img_height=\"654\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"8\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		郭晶晶和霍启刚作为恩爱夫妻的模范，时时刻刻都不忘记撒狗粮。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:455.703px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/12dd0006b647046599ef\" img_width=\"512\" img_height=\"614\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"9\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;width:719px;min-height:528.696px;\">\r\n		郭晶晶曾透露有计划明年再生个小孩，讲到相处之道是互相宽容和体谅。郭晶晶称两人会互相体谅对方，站在对方的角度想，家庭是一起努力的结果。<img src=\"http://p3.pstatp.com/large/12dd0006b64dd1ce384d\" img_width=\"483\" img_height=\"672\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"10\" class=\"mt12 pre20\" style=\"margin:20px auto 4px;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		婚后的霍启刚的确变身居家好男人。前不久剧经常拍到夫妻两个一起逛超市。而且霍启刚全程自己拎着东西，网友纷纷表示“家庭琐事都负责的才是好男人一枚。晶晶没有嫁错人。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:366.688px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/12810006eb03a599c91c\" img_width=\"628\" img_height=\"606\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"11\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		除了婚后生活甜蜜之外，两夫妻俩虽是豪门，却十分节俭。此前，有眼尖的网友竟然发现，郭晶晶与霍启刚穿的情侣装是12年拍结婚照时的衣服。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:270.836px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/1328001057a04aed2dd3\" img_width=\"550\" img_height=\"392\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"12\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		他们两夫妻时不时就晒晒恩爱，真是让人好生羡慕。以前郭晶晶在《非常 静距离》时就揭秘说，老公霍启刚是一个很贴心的人，在生完孩子后一直悉心的照顾着她，还经常给她吃<span style=\"margin:0px;padding:16px 0px 0px;border:0px;font-weight:bolder;color:#3A3A3A;\">葛谷养生粥</span>，佰 镀有 方 法。怪不得退役多年后的郭晶晶体型保持得还是那么好，生完孩子的她也是辣妈一枚。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:265.367px;background:url(&quot;\">\r\n		<img src=\"http://p1.pstatp.com/large/127b0005e34c0d05488d\" img_width=\"600\" img_height=\"419\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"13\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		郭晶晶真是一个持家的好媳妇，虽然身价不菲，却异常低调，一身衣服要穿好几年，她穿着的这件中国风的旗袍款式上衣就出席了近年来的不同场合。搭配蓝色的休闲裤，看起来古典风。作为一个豪门媳妇做到这样真是太值得敬佩的。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:518.846px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/1069000251b8c8e0a77b\" img_width=\"468\" img_height=\"639\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"14\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		把头发披着很好看，显得五官很立体。一身红色的连衣裙看起来喜庆又清爽，手上的镶钻手拿包也是气势十足。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:514.727px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/12db000313e1c2c8df36\" img_width=\"550\" img_height=\"745\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"15\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		出席大场合的郭晶晶当然也是明星范儿十足，这一身飘逸的白色长裙是不是看起来很女神，果然是运动员的体质，身材真是十分健美。搭配朝右边的发型，人看起来都美了几个度。果然人靠衣装，精心打扮后的郭晶晶真很美呢？\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:590.395px;background:url(&quot;\">\r\n		<img src=\"http://p2.pstatp.com/large/12de0003181f998cb7f2\" img_width=\"354\" img_height=\"550\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"16\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		这一身黑色的纽扣风衣穿出了新时代女性的精神面貌，看起来文静也很有气质，卷发很适合她，手上挎着的白色手袋很有大牌范儿。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:482.562px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/12da0002e71bf89756c7\" img_width=\"804\" img_height=\"1021\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"17\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		这样贴心的老公，难怪当初郭晶晶不怕舆论，坚决嫁过去，现在幸福的让不少女人眼红到想哭，祝福他们两个。\r\n	</p>\r\n	<p class=\"img-wrapper\" style=\"margin:24px auto 0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:0px;width:719px;min-height:449.935px;background:url(&quot;\">\r\n		<img src=\"http://p3.pstatp.com/large/11930006a5a33ed02072\" img_width=\"614\" img_height=\"727\" alt=\"郭晶晶一家出现在机场，霍启刚这个小举动让众多女人嫉妒到想哭\" data-index=\"18\" style=\"margin:4px auto;padding:0px;width:719px;display:block;\" />\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		结语：喜欢郭晶晶吗？\r\n	</p>\r\n	<p style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;\">\r\n		何洁离婚你们支持吗？\r\n	</p>\r\n</div>\r\n<p class=\"footnote\" style=\"margin-top:24px;margin-bottom:0px;padding:0px;border:none;color:#333333;line-height:28px;outline:none;max-height:100%;font-size:17px;font-family:STHeiti, &quot;white-space:normal;widows:1;background-color:#F8F8F8;\">\r\n	本文为头条号作者发布，不代表今日头条立场。\r\n</p>', '1482250000', '0');

-- ----------------------------
-- Table structure for uw_article_cate
-- ----------------------------
DROP TABLE IF EXISTS `uw_article_cate`;
CREATE TABLE `uw_article_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  `name` char(32) NOT NULL DEFAULT '',
  `model` char(10) NOT NULL DEFAULT '',
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `img` char(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_article_cate
-- ----------------------------
INSERT INTO `uw_article_cate` VALUES ('36', '0', '0', '1', '推荐', '', '1', '');
INSERT INTO `uw_article_cate` VALUES ('38', '0', '0', '2', '社会', '', '1', '');
INSERT INTO `uw_article_cate` VALUES ('39', '0', '0', '3', '娱乐', '', '1', '');

-- ----------------------------
-- Table structure for uw_diy
-- ----------------------------
DROP TABLE IF EXISTS `uw_diy`;
CREATE TABLE `uw_diy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT '',
  `text` char(255) NOT NULL,
  `music` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '上传时间',
  `uname` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_diy
-- ----------------------------
INSERT INTO `uw_diy` VALUES ('18', '2', '5851ec1ed3837.png', '', '5851ec294b2f4.mp3', '', '1481764024', '');
INSERT INTO `uw_diy` VALUES ('19', '2', '5852061bbabd3.jpg', '', '58520140788cc.mp3', '', '1481770548', '');
INSERT INTO `uw_diy` VALUES ('20', '2', '585207661a8e9.jpg', '', '58520770d961a.mp3', '', '1481770872', '');
INSERT INTO `uw_diy` VALUES ('21', '7', 'm_5858886b2d880.jpg', '哈喽', '585889e0d8c3f.mp3', '58588a101987b.mp4', '1482197527', 'miaomiao');
INSERT INTO `uw_diy` VALUES ('22', '9', 'm_58588b73d1035.jpg', '123', '58588b7c234cf.mp3', '58588b875060f.mp4', '1482197896', 'miaozhiqiang');

-- ----------------------------
-- Table structure for uw_img
-- ----------------------------
DROP TABLE IF EXISTS `uw_img`;
CREATE TABLE `uw_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `savename` varchar(32) NOT NULL COMMENT '文件名',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_img
-- ----------------------------
INSERT INTO `uw_img` VALUES ('1', '1', '5850fc0f3ee0f.png', '1481702415');
INSERT INTO `uw_img` VALUES ('2', '1', '5850fc167bc56.png', '1481702422');
INSERT INTO `uw_img` VALUES ('3', '1', '5850fc6cd1b19.png', '1481702508');
INSERT INTO `uw_img` VALUES ('4', '1', '5850fceb7a59c.png', '1481702635');
INSERT INTO `uw_img` VALUES ('5', '1', '5850fe89579a4.png', '1481703049');
INSERT INTO `uw_img` VALUES ('6', '7', '585200f190d6b.png', '1481769201');
INSERT INTO `uw_img` VALUES ('7', '7', '585201b462bb1.jpg', '1481769396');
INSERT INTO `uw_img` VALUES ('8', '7', '58521014d4618.jpg', '1481773076');
INSERT INTO `uw_img` VALUES ('9', '7', '58521054a27d9.jpg', '1481773140');
INSERT INTO `uw_img` VALUES ('10', '7', 'm_5852264779ac1.jpg', '1481778763');
INSERT INTO `uw_img` VALUES ('11', '7', 'm_585226f2e9ee0.jpg', '1481778932');
INSERT INTO `uw_img` VALUES ('12', '7', 'm_585227311db83.jpg', '1481778995');
INSERT INTO `uw_img` VALUES ('13', '7', 'm_58522dcf83046.png', '1481780687');
INSERT INTO `uw_img` VALUES ('14', '7', 'm_58525e5e4f695.jpg', '1481793120');
INSERT INTO `uw_img` VALUES ('15', '7', 'm_5852645c7208e.png', '1481794652');
INSERT INTO `uw_img` VALUES ('16', '7', 'm_585341c450ddc.png', '1481851332');
INSERT INTO `uw_img` VALUES ('17', '7', 'm_585739ce37e0e.jpg', '1482111438');
INSERT INTO `uw_img` VALUES ('18', '7', 'm_585739f5a344b.jpg', '1482111477');
INSERT INTO `uw_img` VALUES ('19', '7', 'm_58573a1e170d3.jpg', '1482111519');
INSERT INTO `uw_img` VALUES ('20', '7', 'm_58573db36b2e0.jpg', '1482112437');
INSERT INTO `uw_img` VALUES ('21', '7', 'm_58573df65eee5.jpg', '1482112504');
INSERT INTO `uw_img` VALUES ('22', '7', 'm_58573e0f7b9a2.png', '1482112527');
INSERT INTO `uw_img` VALUES ('23', '7', 'm_58573e33957f3.jpg', '1482112565');
INSERT INTO `uw_img` VALUES ('24', '7', 'm_58573ebc309ef.jpg', '1482112702');
INSERT INTO `uw_img` VALUES ('25', '7', 'm_58573edae8a4e.jpg', '1482112731');
INSERT INTO `uw_img` VALUES ('26', '7', 'm_58573f5c3ae99.jpg', '1482112860');
INSERT INTO `uw_img` VALUES ('27', '7', 'm_58573f77eb91b.jpg', '1482112888');
INSERT INTO `uw_img` VALUES ('28', '7', 'm_58573f9266a34.jpg', '1482112914');
INSERT INTO `uw_img` VALUES ('29', '7', 'm_58573fab82168.jpg', '1482112940');
INSERT INTO `uw_img` VALUES ('30', '7', 'm_5857485e11617.jpg', '1482115166');

-- ----------------------------
-- Table structure for uw_user
-- ----------------------------
DROP TABLE IF EXISTS `uw_user`;
CREATE TABLE `uw_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(32) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `ctime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of uw_user
-- ----------------------------
INSERT INTO `uw_user` VALUES ('1', '123', '4297f44b13955235245b2497399d7a93', '0');
INSERT INTO `uw_user` VALUES ('2', 'qwe', '4297f44b13955235245b2497399d7a93', '1481620818');
INSERT INTO `uw_user` VALUES ('3', '321', '4297f44b13955235245b2497399d7a93', '1481677773');
INSERT INTO `uw_user` VALUES ('4', '321321', '4297f44b13955235245b2497399d7a93', '1481677918');
INSERT INTO `uw_user` VALUES ('5', '33333333', '4297f44b13955235245b2497399d7a93', '1481765611');
INSERT INTO `uw_user` VALUES ('6', '3213211', '4297f44b13955235245b2497399d7a93', '1481766557');
INSERT INTO `uw_user` VALUES ('7', 'miaomiao', '4297f44b13955235245b2497399d7a93', '1481768685');
INSERT INTO `uw_user` VALUES ('8', 'miaomi', '4297f44b13955235245b2497399d7a93', '1481790300');
INSERT INTO `uw_user` VALUES ('9', 'miaozhiqiang', '4d8dd2e8a3fbfd25f71c43385afa7ca0', '1482197838');

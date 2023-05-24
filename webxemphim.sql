CREATE DATABASE webxemphim;

USE webxemphim;

CREATE TABLE phim (
	maphim VARCHAR(200) PRIMARY KEY,
	tenphim VARCHAR(200),
	namphathinh INT,
	theloai VARCHAR(200),
	quocgia VARCHAR(50),
	dienvien VARCHAR(200),
	mota TEXT,
	link TEXT
);

CREATE TABLE taikhoan (
	tendangnhap VARCHAR(20),
	matkhau VARCHAR(1000),
	quyen CHAR(10)
);

INSERT INTO phim VALUES 
	('3-idiots', '3 Idiots', 2009, N'Hài hước, Kịch tính', 'Ấn độ', '', '', 'https://drive.google.com/file/d/1dyYsg83t8aqMWIORcy-smjzze-W-I_4d/preview'),
	('accepted', 'Accepted', 2006, N'Hài hước', 'Mỹ', '', '', 'https://drive.google.com/file/d/1yNp1lrbFGopwcl_R-vrpV9zcE3EsVna_/preview'),
	('agent-cody-banks', 'Agent Cody Banks', 2003, N'Hành động, Phiêu lưu, Hài hước', 'Mỹ', '', '', 'https://drive.google.com/file/d/1-4tZC_q688VXZdRgIlttz5trYMef6dCU/preview'),
	('baby-driver', 'Bady Driver', 2017, N'Hành động, Tội phạm, Kịch tính', 'Vương Quốc Anh', '', '', 'https://drive.google.com/file/d/1R187yDfe55wGJWHYYJ1cEuD-Dev4RFLa/preview'),
	('birds-of-prey', 'Birds Of Prey', 2020, N'Hành động, Hài hước, Tội phạm', 'Mỹ', '', '', 'https://drive.google.com/file/d/1LsGabjIPmUFYatxD6PDW-LQ65BLrY3sd/preview');
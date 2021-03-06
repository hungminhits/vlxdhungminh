USE [QLTV]
GO
/****** Object:  Table [dbo].[CT_Phieumuon]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CT_Phieumuon](
	[Maphieu] [bigint] NOT NULL,
	[Masach] [bigint] NOT NULL,
	[Ngaytra] [smalldatetime] NULL,
	[Tinhtrangmuon] [bit] NOT NULL,
	[Tra] [bit] NOT NULL,
	[MaNVNS] [int] NULL,
 CONSTRAINT [PK_CT_Phieumuon] PRIMARY KEY CLUSTERED 
(
	[Maphieu] ASC,
	[Masach] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Docgia]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Docgia](
	[MADG] [bigint] IDENTITY(1,1) NOT NULL,
	[HODG] [varchar](50) NOT NULL,
	[TENDG] [varchar](12) NOT NULL,
	[EMAILDG] [varchar](30) NOT NULL,
	[SOCMND] [varchar](12) NOT NULL,
	[GIOITINH] [bit] NOT NULL,
	[NGAYSINH] [smalldatetime] NOT NULL,
	[DIACHI] [varchar](50) NULL,
	[DIENTHOAI] [varchar](11) NULL,
	[NGAYLAMTHE] [smalldatetime] NOT NULL,
	[NGAYHETHAN] [smalldatetime] NOT NULL,
	[HOATDONG] [bit] NOT NULL,
 CONSTRAINT [PK_Docgia] PRIMARY KEY CLUSTERED 
(
	[MADG] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[ISBN]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ISBN](
	[ISBN] [bigint] IDENTITY(1,1) NOT NULL,
	[TENSACH] [varchar](100) NOT NULL,
	[KHOSACH] [varchar](5) NOT NULL,
	[NOIDUNG] [varchar](300) NOT NULL,
	[HINHANHPATH] [varchar](50) NULL,
	[NGAYXUATBAN] [smalldatetime] NOT NULL,
	[LANXUATBAN] [int] NOT NULL,
	[SOTRANG] [int] NOT NULL,
	[GIA] [bigint] NOT NULL,
	[NHAXB] [varchar](100) NOT NULL,
	[MANGONNGU] [int] NOT NULL,
	[MATL] [char](5) NOT NULL,
 CONSTRAINT [PK_ISBN] PRIMARY KEY CLUSTERED 
(
	[ISBN] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Ngantu]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ngantu](
	[Mangantu] [int] IDENTITY(1,1) NOT NULL,
	[Mota] [varchar](50) NOT NULL,
	[Ke] [varchar](100) NOT NULL,
 CONSTRAINT [PK_Ngantu] PRIMARY KEY CLUSTERED 
(
	[Mangantu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Ngonngu]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Ngonngu](
	[MANGONNGU] [int] IDENTITY(1,1) NOT NULL,
	[NGONNGU] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Ngonngu] PRIMARY KEY CLUSTERED 
(
	[MANGONNGU] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Nhanvien]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Nhanvien](
	[MaNV] [int] IDENTITY(1,1) NOT NULL,
	[HoNV] [varchar](50) NOT NULL,
	[TenNV] [varchar](12) NOT NULL,
	[Gioitinh] [bit] NOT NULL,
	[Diachi] [varchar](100) NOT NULL,
	[Dienthoai] [varchar](11) NULL,
	[Email] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Nhanvien] PRIMARY KEY CLUSTERED 
(
	[MaNV] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Phieumuon]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Phieumuon](
	[Maphieu] [bigint] IDENTITY(1,1) NOT NULL,
	[MaDG] [bigint] NOT NULL,
	[Hinhthuc] [bit] NOT NULL,
	[Ngaymuon] [smalldatetime] NOT NULL,
	[MaNV] [int] NOT NULL,
 CONSTRAINT [PK_Phieumuon] PRIMARY KEY CLUSTERED 
(
	[Maphieu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Sach]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Sach](
	[ISBN] [bigint] NOT NULL,
	[Masach] [bigint] IDENTITY(1,1) NOT NULL,
	[Tinhtrang] [bit] NULL,
	[ChoMuon] [bit] NULL,
	[Mangantu] [int] NULL,
 CONSTRAINT [PK_Sach] PRIMARY KEY CLUSTERED 
(
	[Masach] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Sach_dientu]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Sach_dientu](
	[MASACH] [bigint] NOT NULL,
	[FILEPATH] [varchar](50) NULL,
	[SOLANDOWN] [bigint] NULL,
	[CHOPHEPDOWN] [bit] NULL,
	[ISBN] [bigint] NULL,
 CONSTRAINT [PK_Sach_dientu] PRIMARY KEY CLUSTERED 
(
	[MASACH] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Tacgia]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Tacgia](
	[MATACGIA] [int] IDENTITY(1,1) NOT NULL,
	[HOTENTG] [varchar](50) NOT NULL,
	[DIACHITG] [varchar](100) NULL,
	[DIENTHOAITG] [varchar](11) NULL,
 CONSTRAINT [PK_Tacgia] PRIMARY KEY CLUSTERED 
(
	[MATACGIA] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Tacgia_sach]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tacgia_sach](
	[MATACGIA] [int] NOT NULL,
	[ISBN] [bigint] NOT NULL,
 CONSTRAINT [PK_Tacgia_sach] PRIMARY KEY CLUSTERED 
(
	[MATACGIA] ASC,
	[ISBN] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Theloai]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Theloai](
	[MATL] [char](5) NOT NULL,
	[THELOAI] [varchar](50) NULL,
 CONSTRAINT [PK_Theloai] PRIMARY KEY CLUSTERED 
(
	[MATL] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (6, 30, CAST(N'2018-09-12 00:00:00' AS SmallDateTime), 0, 1, 2)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (7, 26, NULL, 1, 0, NULL)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (8, 27, NULL, 1, 0, NULL)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (9, 3, NULL, 1, 0, NULL)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (10, 29, NULL, 1, 0, NULL)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (11, 28, NULL, 1, 0, NULL)
INSERT [dbo].[CT_Phieumuon] ([Maphieu], [Masach], [Ngaytra], [Tinhtrangmuon], [Tra], [MaNVNS]) VALUES (12, 31, NULL, 1, 0, NULL)
SET IDENTITY_INSERT [dbo].[Docgia] ON 

INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (9, N'Vu', N'Luc', N'VuLuc@gmail.com', N'0123456789', 1, CAST(N'1990-06-02 00:00:00' AS SmallDateTime), N'123/456', N'0248321584', CAST(N'2010-06-02 00:00:00' AS SmallDateTime), CAST(N'2018-06-02 00:00:00' AS SmallDateTime), 0)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (10, N'Nguyen', N'Minh', N'hoangminh@gmail.com', N'0236558236', 1, CAST(N'1995-06-02 00:00:00' AS SmallDateTime), N'456/789', N'0266358214', CAST(N'2010-06-03 00:00:00' AS SmallDateTime), CAST(N'2018-06-03 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (11, N'Huynh', N'Nam', N'Nam@gmail.com', N'0025557489', 1, CAST(N'1995-10-02 00:00:00' AS SmallDateTime), N'122/555', N'0998567423', CAST(N'2010-06-06 00:00:00' AS SmallDateTime), CAST(N'2018-06-06 00:00:00' AS SmallDateTime), 0)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (12, N'Nguyen', N'Tien', N'Tien@gmai.com', N'0222356987', 0, CAST(N'1995-01-01 00:00:00' AS SmallDateTime), N'222/666', N'0332635899', CAST(N'2006-06-06 00:00:00' AS SmallDateTime), CAST(N'2015-06-06 00:00:00' AS SmallDateTime), 0)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (13, N'Tien', N'TienLuc', N'hoangminh@gmail.com', N'1234567890', 1, CAST(N'1991-11-27 00:00:00' AS SmallDateTime), N'22/11', N'1234567890', CAST(N'2016-12-20 00:00:00' AS SmallDateTime), CAST(N'2017-12-20 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (14, N'Tien', N'Luc', N'lkjdlsajd@gmail.com', N'1234567890', 1, CAST(N'1991-11-27 00:00:00' AS SmallDateTime), N'34/1213', N'1234567890', CAST(N'2016-12-20 00:00:00' AS SmallDateTime), CAST(N'2017-12-20 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (15, N'Vu', N'Luc', N'VuLuc@gmail.com', N'0123456789', 1, CAST(N'1990-06-02 00:00:00' AS SmallDateTime), N'123/456', N'0248321584', CAST(N'2010-06-02 00:00:00' AS SmallDateTime), CAST(N'2018-06-02 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Docgia] ([MADG], [HODG], [TENDG], [EMAILDG], [SOCMND], [GIOITINH], [NGAYSINH], [DIACHI], [DIENTHOAI], [NGAYLAMTHE], [NGAYHETHAN], [HOATDONG]) VALUES (16, N'Huynh', N'23/9898987', N'Huynhnhatnam821-@gmail.com', N'323324424', 1, CAST(N'2017-06-07 15:45:00' AS SmallDateTime), N'23/9898987', N'09123048786', CAST(N'2017-06-21 15:45:00' AS SmallDateTime), CAST(N'2017-06-24 15:45:00' AS SmallDateTime), 1)
SET IDENTITY_INSERT [dbo].[Docgia] OFF
SET IDENTITY_INSERT [dbo].[ISBN] ON 

INSERT [dbo].[ISBN] ([ISBN], [TENSACH], [KHOSACH], [NOIDUNG], [HINHANHPATH], [NGAYXUATBAN], [LANXUATBAN], [SOTRANG], [GIA], [NHAXB], [MANGONNGU], [MATL]) VALUES (1, N'Khoa hoc vien tuong', N'1', N'ch? có gì', N'aaa', CAST(N'2000-10-10 00:00:00' AS SmallDateTime), 1, 9, 10000, N'kimdong', 2, N'1    ')
INSERT [dbo].[ISBN] ([ISBN], [TENSACH], [KHOSACH], [NOIDUNG], [HINHANHPATH], [NGAYXUATBAN], [LANXUATBAN], [SOTRANG], [GIA], [NHAXB], [MANGONNGU], [MATL]) VALUES (3, N'khoa hoc', N'1', N'abc', NULL, CAST(N'2000-10-10 00:00:00' AS SmallDateTime), 1, 9, 10000, N'kimdong', 2, N'1    ')
INSERT [dbo].[ISBN] ([ISBN], [TENSACH], [KHOSACH], [NOIDUNG], [HINHANHPATH], [NGAYXUATBAN], [LANXUATBAN], [SOTRANG], [GIA], [NHAXB], [MANGONNGU], [MATL]) VALUES (4, N'xa hoi', N'1', N'abc', NULL, CAST(N'2000-10-10 00:00:00' AS SmallDateTime), 1, 9, 10000, N'kimdong', 2, N'2    ')
INSERT [dbo].[ISBN] ([ISBN], [TENSACH], [KHOSACH], [NOIDUNG], [HINHANHPATH], [NGAYXUATBAN], [LANXUATBAN], [SOTRANG], [GIA], [NHAXB], [MANGONNGU], [MATL]) VALUES (8, N'Lich Su', N'2', N'aaa', N'aa', CAST(N'2017-09-22 00:00:00' AS SmallDateTime), 1, 1111, 221111, N'thanhnien', 1, N'2    ')
SET IDENTITY_INSERT [dbo].[ISBN] OFF
SET IDENTITY_INSERT [dbo].[Ngantu] ON 

INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (1, N'ke dung sach khoa hoc', N'1')
INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (2, N'ke dung sach xa hoi', N'2')
INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (3, N'ke dung sach toan', N'3')
INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (4, N'ke dung sach van', N'4')
INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (5, N'ke dung sach ky thuat', N'5')
INSERT [dbo].[Ngantu] ([Mangantu], [Mota], [Ke]) VALUES (6, N'ke dung sach nhan van', N'2')
SET IDENTITY_INSERT [dbo].[Ngantu] OFF
SET IDENTITY_INSERT [dbo].[Ngonngu] ON 

INSERT [dbo].[Ngonngu] ([MANGONNGU], [NGONNGU]) VALUES (1, N'Anh')
INSERT [dbo].[Ngonngu] ([MANGONNGU], [NGONNGU]) VALUES (2, N'Viet')
INSERT [dbo].[Ngonngu] ([MANGONNGU], [NGONNGU]) VALUES (3, N'Trung')
INSERT [dbo].[Ngonngu] ([MANGONNGU], [NGONNGU]) VALUES (4, N'Han')
SET IDENTITY_INSERT [dbo].[Ngonngu] OFF
SET IDENTITY_INSERT [dbo].[Nhanvien] ON 

INSERT [dbo].[Nhanvien] ([MaNV], [HoNV], [TenNV], [Gioitinh], [Diachi], [Dienthoai], [Email]) VALUES (1, N'Nguyen', N'A', 1, N'222/666', N'0999665966', N'A@gmail.com')
INSERT [dbo].[Nhanvien] ([MaNV], [HoNV], [TenNV], [Gioitinh], [Diachi], [Dienthoai], [Email]) VALUES (2, N'Nguyen', N'B', 0, N'111/222', N'0999965863', N'B@gmail.com')
SET IDENTITY_INSERT [dbo].[Nhanvien] OFF
SET IDENTITY_INSERT [dbo].[Phieumuon] ON 

INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (6, 15, 1, CAST(N'2011-06-06 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (7, 9, 1, CAST(N'2017-06-13 00:00:00' AS SmallDateTime), 2)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (8, 10, 1, CAST(N'2017-06-08 00:00:00' AS SmallDateTime), 2)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (9, 15, 1, CAST(N'2017-06-16 00:00:00' AS SmallDateTime), 2)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (10, 14, 1, CAST(N'2017-05-08 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (11, 13, 1, CAST(N'2017-03-07 00:00:00' AS SmallDateTime), 1)
INSERT [dbo].[Phieumuon] ([Maphieu], [MaDG], [Hinhthuc], [Ngaymuon], [MaNV]) VALUES (12, 11, 1, CAST(N'2017-07-07 00:00:00' AS SmallDateTime), 1)
SET IDENTITY_INSERT [dbo].[Phieumuon] OFF
SET IDENTITY_INSERT [dbo].[Sach] ON 

INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (3, 3, 1, 1, 2)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (1, 26, 1, 1, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (4, 27, 1, 1, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (8, 28, 1, 1, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (1, 29, 1, 1, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (3, 30, 0, 0, 4)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (8, 31, 1, 1, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (4, 32, 1, 0, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (8, 33, 1, 0, 1)
INSERT [dbo].[Sach] ([ISBN], [Masach], [Tinhtrang], [ChoMuon], [Mangantu]) VALUES (3, 34, 1, 0, 4)
SET IDENTITY_INSERT [dbo].[Sach] OFF
INSERT [dbo].[Sach_dientu] ([MASACH], [FILEPATH], [SOLANDOWN], [CHOPHEPDOWN], [ISBN]) VALUES (1, N'sachkhoahoc/sach', 10, 1, 3)
INSERT [dbo].[Sach_dientu] ([MASACH], [FILEPATH], [SOLANDOWN], [CHOPHEPDOWN], [ISBN]) VALUES (3, N'xahoi/sach', 9, 0, 4)
SET IDENTITY_INSERT [dbo].[Tacgia] ON 

INSERT [dbo].[Tacgia] ([MATACGIA], [HOTENTG], [DIACHITG], [DIENTHOAITG]) VALUES (1, N'Tran', N'A', N'0123458856')
INSERT [dbo].[Tacgia] ([MATACGIA], [HOTENTG], [DIACHITG], [DIENTHOAITG]) VALUES (2, N'Pham', N'N', N'0987996586')
INSERT [dbo].[Tacgia] ([MATACGIA], [HOTENTG], [DIACHITG], [DIENTHOAITG]) VALUES (10, N'Minh', N'2324/3878', N'24432143')
INSERT [dbo].[Tacgia] ([MATACGIA], [HOTENTG], [DIACHITG], [DIENTHOAITG]) VALUES (12, N'Nam', N'14423/3434', N'34234235')
SET IDENTITY_INSERT [dbo].[Tacgia] OFF
INSERT [dbo].[Tacgia_sach] ([MATACGIA], [ISBN]) VALUES (2, 4)
INSERT [dbo].[Tacgia_sach] ([MATACGIA], [ISBN]) VALUES (10, 1)
INSERT [dbo].[Theloai] ([MATL], [THELOAI]) VALUES (N'1    ', N'Khoa Hoc')
INSERT [dbo].[Theloai] ([MATL], [THELOAI]) VALUES (N'2    ', N'Xa Hoi')
INSERT [dbo].[Theloai] ([MATL], [THELOAI]) VALUES (N'3    ', N'Toan')
INSERT [dbo].[Theloai] ([MATL], [THELOAI]) VALUES (N'4    ', N'Anh')
ALTER TABLE [dbo].[CT_Phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_CT_Phieumuon_Nhanvien] FOREIGN KEY([MaNVNS])
REFERENCES [dbo].[Nhanvien] ([MaNV])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[CT_Phieumuon] CHECK CONSTRAINT [FK_CT_Phieumuon_Nhanvien]
GO
ALTER TABLE [dbo].[CT_Phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_CT_Phieumuon_Phieumuon] FOREIGN KEY([Maphieu])
REFERENCES [dbo].[Phieumuon] ([Maphieu])
GO
ALTER TABLE [dbo].[CT_Phieumuon] CHECK CONSTRAINT [FK_CT_Phieumuon_Phieumuon]
GO
ALTER TABLE [dbo].[CT_Phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_CT_Phieumuon_Sach] FOREIGN KEY([Masach])
REFERENCES [dbo].[Sach] ([Masach])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[CT_Phieumuon] CHECK CONSTRAINT [FK_CT_Phieumuon_Sach]
GO
ALTER TABLE [dbo].[ISBN]  WITH CHECK ADD  CONSTRAINT [FK_ISBN_Ngonngu] FOREIGN KEY([MANGONNGU])
REFERENCES [dbo].[Ngonngu] ([MANGONNGU])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[ISBN] CHECK CONSTRAINT [FK_ISBN_Ngonngu]
GO
ALTER TABLE [dbo].[ISBN]  WITH CHECK ADD  CONSTRAINT [FK_ISBN_Theloai] FOREIGN KEY([MATL])
REFERENCES [dbo].[Theloai] ([MATL])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[ISBN] CHECK CONSTRAINT [FK_ISBN_Theloai]
GO
ALTER TABLE [dbo].[Phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_Phieumuon_Docgia] FOREIGN KEY([MaDG])
REFERENCES [dbo].[Docgia] ([MADG])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Phieumuon] CHECK CONSTRAINT [FK_Phieumuon_Docgia]
GO
ALTER TABLE [dbo].[Phieumuon]  WITH CHECK ADD  CONSTRAINT [FK_Phieumuon_Nhanvien] FOREIGN KEY([MaNV])
REFERENCES [dbo].[Nhanvien] ([MaNV])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Phieumuon] CHECK CONSTRAINT [FK_Phieumuon_Nhanvien]
GO
ALTER TABLE [dbo].[Sach]  WITH CHECK ADD  CONSTRAINT [FK_Sach_ISBN] FOREIGN KEY([ISBN])
REFERENCES [dbo].[ISBN] ([ISBN])
GO
ALTER TABLE [dbo].[Sach] CHECK CONSTRAINT [FK_Sach_ISBN]
GO
ALTER TABLE [dbo].[Sach]  WITH CHECK ADD  CONSTRAINT [FK_Sach_Ngantu] FOREIGN KEY([Mangantu])
REFERENCES [dbo].[Ngantu] ([Mangantu])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Sach] CHECK CONSTRAINT [FK_Sach_Ngantu]
GO
ALTER TABLE [dbo].[Sach_dientu]  WITH CHECK ADD  CONSTRAINT [FK_Sach_dientu_ISBN] FOREIGN KEY([ISBN])
REFERENCES [dbo].[ISBN] ([ISBN])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Sach_dientu] CHECK CONSTRAINT [FK_Sach_dientu_ISBN]
GO
ALTER TABLE [dbo].[Tacgia_sach]  WITH CHECK ADD  CONSTRAINT [FK_Tacgia_sach_ISBN] FOREIGN KEY([ISBN])
REFERENCES [dbo].[ISBN] ([ISBN])
GO
ALTER TABLE [dbo].[Tacgia_sach] CHECK CONSTRAINT [FK_Tacgia_sach_ISBN]
GO
ALTER TABLE [dbo].[Tacgia_sach]  WITH CHECK ADD  CONSTRAINT [FK_Tacgia_sach_Tacgia] FOREIGN KEY([MATACGIA])
REFERENCES [dbo].[Tacgia] ([MATACGIA])
GO
ALTER TABLE [dbo].[Tacgia_sach] CHECK CONSTRAINT [FK_Tacgia_sach_Tacgia]
GO
/****** Object:  StoredProcedure [dbo].[SP_CT_PHIEUMUON_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_CT_PHIEUMUON_INSERT]
	@MAPHIEU AS BIGINT,
	@MASACH AS VARCHAR(10),
	@NGAYTRA AS SMALLDATETIME,
	@TINHTRANGMUON AS BIT,
	@TRA AS BIT,
	@MANVNS AS INT
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO CT_PHIEUMUON(MAPHIEU, MASACH, NGAYTRA, TINHTRANGMUON, TRA, MANVNS) VALUES(@MAPHIEU, @MASACH, @NGAYTRA, @TINHTRANGMUON, @TRA, @MANVNS)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_GUITHONGBAO]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_GUITHONGBAO]
	@HODG AS NVARCHAR(50),
	@TENDG AS NVARCHAR(12),
	@EMAILDG AS NVARCHAR(50),
	@SOCMND AS NVARCHAR(12),
	@GIOITINH AS BIT,
	@NGAYSINH AS NVARCHAR(30), --- THIS IS FOR SCIENCE
	@DIACHI AS NVARCHAR(50),
	@DIENTHOAI AS NVARCHAR(11),
	@NGAYLAMTHE AS NVARCHAR(30),
	@NGAYHETHAN AS NVARCHAR(30),
	@HOATDONG AS BIT
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO DOCGIA(HODG, TENDG, EMAILDG, SOCMND, GIOITINH, NGAYSINH, DIACHI, DIENTHOAI, NGAYLAMTHE, NGAYHETHAN, HOATDONG)
	    VALUES(@HODG, @TENDG, @EMAILDG, @SOCMND, @GIOITINH, convert(datetime, @NGAYSINH, 103), @DIACHI, @DIENTHOAI, convert(datetime, @NGAYLAMTHE, 103), convert(datetime, @NGAYHETHAN, 103), @HOATDONG)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_INSERT]
	@HODG AS NVARCHAR(50),
	@TENDG AS NVARCHAR(12),
	@EMAILDG AS NVARCHAR(50),
	@SOCMND AS NVARCHAR(12),
	@GIOITINH AS BIT,
	@NGAYSINH AS NVARCHAR(30), --- THIS IS FOR SCIENCE
	@DIACHI AS NVARCHAR(50),
	@DIENTHOAI AS NVARCHAR(11),
	@NGAYLAMTHE AS NVARCHAR(30),
	@NGAYHETHAN AS NVARCHAR(30),
	@HOATDONG AS BIT
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO DOCGIA(HODG, TENDG, EMAILDG, SOCMND, GIOITINH, NGAYSINH, DIACHI, DIENTHOAI, NGAYLAMTHE, NGAYHETHAN, HOATDONG)
	    VALUES(@HODG, @TENDG, @EMAILDG, @SOCMND, @GIOITINH, convert(datetime, @NGAYSINH, 103), @DIACHI, @DIENTHOAI, convert(datetime, @NGAYLAMTHE, 103), convert(datetime, @NGAYHETHAN, 103), @HOATDONG)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_LAMLAITHE]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_LAMLAITHE]
	@MADG AS BIGINT
	
AS
BEGIN
	SET NOCOUNT ON;
	BEGIN TRANSACTION
    BEGIN TRY

		INSERT INTO DOCGIA(HODG, TENDG, EMAILDG, SOCMND, GIOITINH, NGAYSINH, DIACHI, DIENTHOAI, NGAYLAMTHE, NGAYHETHAN, HOATDONG)
			SELECT HODG, TENDG, EMAILDG, SOCMND, GIOITINH, NGAYSINH, DIACHI, DIENTHOAI, NGAYLAMTHE, NGAYHETHAN, HOATDONG FROM Docgia
			WHERE	MADG = @MADG
		UPDATE Docgia
		SET Hoatdong = 0
		where MaDG = @MADG

		declare @temp as bigint --khai báo để lấy cái mã mới nhất vừa dc lập để thay đổi trong bảng 
		select @temp = MAX(MaDG) FROM Docgia -- câu lệnh để lấy lại mã lớn nhất

		UPDATE Phieumuon
		SET MaDG = @temp
		WHERE Phieumuon.MaDG = @MADG

		COMMIT -- đúng toàn bộ thì commit
		return 0
	END TRY
	BEGIN CATCH

		ROLLBACK -- Nếu xảy ra bất kì trường hợp nào thì rollback hết toàn bộ và báo là không thực hiện dc việc cấp lại thẻ
		return 1
	END CATCH
	
END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_MUONTRA_MUONSACH]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_MUONTRA_MUONSACH]
	@MADG AS BIGINT,
	@HINHTHUC AS BIT,
	@ISBN AS NVARCHAR(50),
	@NGAYMUON AS NVARCHAR(50),
	@MANV AS BIGINT
AS
BEGIN
	SET NOCOUNT ON;

    DECLARE @DAMUON INT
	-- câu lệnh này dùng để đếm số lượng sách mà độc giả đã mượn và cho vào biến tạm
		select @DAMUON = count(MADG)
		from Phieumuon INNER JOIN CT_Phieumuon 
		ON Phieumuon.Maphieu = CT_Phieumuon.Maphieu
		WHERE MADG = @MADG and Phieumuon.Maphieu = CT_Phieumuon.Maphieu and Tra = 0
	IF @DAMUON = 3 
		RETURN 1 -- Không mượn được sách do đã mượn 3 quyển sách....
	
	-- Trường hợp còn lại thì xem sách có còn không nếu còn thì cho mượn
	-- => nhập bản ghi vào phieumuon và ct_phieumuon

	declare @masach bigint
	
	select top 1 @masach = Masach, @hinhthuc = tinhtrang from Sach  WHERE ISBN = @ISBN and ChoMuon = 0

	--select @masach
	if @masach is null 
		RETURN 2 -- sách bạn cần tìm không còn quyển nào trong thư viện

	else
		BEGIN TRANSACTION
		BEGIN TRY -- BẮT ĐẦU THỰC HIỆN VIỆC MƯỢN SÁCH NẾU CHẠY ĐÚNG TỚI CUỐI TRẢ VỀ 0
			INSERT INTO Phieumuon(MaDG, Hinhthuc, Ngaymuon, MaNV) 
					VALUES(@MADG, @hinhthuc, CONVERT(DATETIME, @NGAYMUON, 103), @MANV)

			DECLARE @TEMP AS BIGINT -- Dùng để lưu giá trị 
			SELECT @temp = MAX(Maphieu) FROM Phieumuon -- LẤY MÃ PHIẾU RA TEMP ĐỂ DÙNG TẠM
			--SELECT @TEMP
			INSERT INTO CT_Phieumuon(Maphieu, Masach, Tinhtrangmuon, Tra)
					VALUES (@TEMP, @masach , @hinhthuc, 0)

			UPDATE SACH 
			SET ChoMuon = 1
			WHERE MASACH = @MASACH
			

			COMMIT -- SAU KHI TẤT CẢ THÀNH CÔNG COMMIT
			RETURN 0
		END TRY
		BEGIN CATCH -- XỬ LÍ CATCH 
			PRINT 'THIS IS ' + ERROR_MESSAGE()
			ROLLBACK --ROLL BACK LẠI KHI XẢY RA LỖI
			RETURN 3 -- XẢY RA LỖI J` ĐÓ TRONG VIỆC INSERT UPDATE 
		END CATCH 
END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_MUONTRA_SACHDANGMUONCUADOCGIA]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_MUONTRA_SACHDANGMUONCUADOCGIA]
	@MADG AS BIGINT
	
AS
BEGIN
	SET NOCOUNT ON;
	-- câu lệnh này dùng để đếm số lượng sách mà độc giả đã mượn và cho vào biến tạm
	SELECT T2.MaDG, ISBN.TENSACH, T2.Ngaymuon, T2.Hinhthuc, T2.Masach FROM 

		(select T1.MaDG, T1.Ngaymuon, T1.Hinhthuc, SACH.ISBN, T1.Masach
		FROM
			(select Phieumuon.MaDG, CT_Phieumuon.Masach, Phieumuon.Ngaymuon, Hinhthuc
			from Phieumuon INNER JOIN CT_Phieumuon 
			ON Phieumuon.Maphieu = CT_Phieumuon.Maphieu
			WHERE MADG = @MADG and Phieumuon.Maphieu = CT_Phieumuon.Maphieu and Tra = 0) AS T1
			
		INNER JOIN Sach ON T1.Masach = Sach.Masach
	
		) AS T2

	INNER JOIN ISBN

	ON T2.ISBN = ISBN.ISBN

	-- KHI CÓ MÃ SÁCH THÌ => CÓ MÃ ISBN => LẤY ĐƯỢC TÊN SÁCH TỪ BẢNG ISBN
END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_MUONTRA_TINHTRANGDOCGIA]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_MUONTRA_TINHTRANGDOCGIA]
	@MADG AS BIGINT
	
AS
BEGIN
	SET NOCOUNT ON;
	DECLARE @DAMUON INT
	-- câu lệnh này dùng để đếm số lượng sách mà độc giả đã mượn và cho vào biến tạm
		select @DAMUON = count(MADG)
		from Phieumuon INNER JOIN CT_Phieumuon 
		ON Phieumuon.Maphieu = CT_Phieumuon.Maphieu
		WHERE MADG = @MADG and Phieumuon.Maphieu = CT_Phieumuon.Maphieu and Tra = 0
	SELECT @DAMUON AS 'SO SACH DA MUON CHUA TRA'
END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_MUONTRA_TRASACH]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_MUONTRA_TRASACH]
	-- trả sách độc giả 
	@MADG AS BIGINT,
	@MASACH AS BIGINT,
	@TRANGTHAILUCTRA AS BIT,
	@NGAYTRA AS NVARCHAR(30),
	@MANV AS BIGINT
AS
BEGIN
	SET NOCOUNT ON;
	-- SELECT CONVERT(SMALLDATETIME, @NGAYTRA, 103) AS 'DATE'
    -- trả sách và xem sét tình trạng sách cũ hay mới.
	-- và xem sét qua số ngày mượn nếu > 30 ngày thì thông báo là phạt tiền 500 vnd / ngày 
	-- in ra dòng mã độc giả, mã sách,tên sách, trạng thái sách lúc mượn, trạng thái sách lúc trả, số ngày mượn, tiền phạt.
	DECLARE @TENSACH AS NVARCHAR(100)
	DECLARE @TRANGTHAILUCMUON AS BIT
	DECLARE @SONGAYMUON AS INT
	DECLARE @TIENPHAT AS INT
	DECLARE @NGAYMUON AS SMALLDATETIME 
	DECLARE @MAPHIEU AS BIGINT
	DECLARE @MUON AS BIT

	-- LẤY TÊN SÁCH DỰA THEO MÃ, TÌNH TRẠNG VÀ ĐÃ MƯỢN CHƯA
	DECLARE @MAISBN AS BIGINT
	SELECT @MAISBN = ISBN, @TRANGTHAILUCMUON = Tinhtrang, @MUON = ChoMuon FROM SACH WHERE  MASACH = @MASACH
	SELECT @TENSACH = TENSACH FROM  ISBN WHERE @MAISBN = ISBN



	IF @MUON = 0 
		RETURN 1 -- NẾU MÀ SÁCH CHƯA MƯỢN THÌ TẠI SAO PHẢI TRẢ

	-- LẤY MÃ PHIẾU DỰA TRÊN MÃ SÁCH VÀ DỮ LIỆU CỘT CHƯA TRẢ
	SELECT @MAPHIEU = MAPHIEU 
	FROM CT_Phieumuon INNER JOIN SACH 
	ON CT_Phieumuon.Masach = SACH.Masach
	WHERE @MASACH = CT_Phieumuon.MASACH AND @MAISBN = SACH.ISBN AND CT_Phieumuon.Tra = 0 

	-- LẤY NGÀY MƯỢN 
	SELECT @NGAYMUON = NGAYMUON FROM Phieumuon WHERE @MAPHIEU = Maphieu

	-- SELECT @NGAYMUON AS 'NGAYMUON'

	-- LẤY SỐ NGÀY MƯỢN
	SELECT @SONGAYMUON = DATEDIFF(DAY, @NGAYMUON, CONVERT(SMALLDATETIME, @NGAYTRA, 103)) -- Lấy số ngày mượn

	if(@SONGAYMUON <= 30)
		SET @TIENPHAT = 0
	ELSE 
		SET @TIENPHAT = (@SONGAYMUON - 30)*500
	-- Tới đây đã có mã độc giả, mã sách, tên sách, trạng thái lúc mượn, trạng thái lúc trả, số ngày mượn, tiền phạt


	BEGIN TRANSACTION
	BEGIN TRY
		-- CHO SÁCH VỀ TRẠNG THÁI CHƯA MƯỢN VÀ CẬP NHẬT TÌNH TRẠNG SÁCH
		UPDATE SACH
			SET ChoMuon = 0, Tinhtrang = @TRANGTHAILUCTRA
			WHERE Masach = @MASACH
		-- Cập nhật lại CT_PHIEUMUON 
		UPDATE CT_Phieumuon
			SET NGAYTRA = CONVERT(SMALLDATETIME, @NGAYTRA, 103), Tinhtrangmuon = @TRANGTHAILUCTRA, MaNVNS = @MANV, TRA = 1
			where Maphieu = @MAPHIEU AND MASACH = @MASACH
		-- KẾT THÚC TRẢ SÁCH 


		-- IN RA ĐỂ NVNS BIẾT 
			select @MADG as 'MADG', 
					@MAISBN AS 'MADAUSACH', 
					@TENSACH AS 'TENSACH', 
					@TRANGTHAILUCMUON AS 'TINHTRANGLUCMUON', 
					@TRANGTHAILUCTRA AS 'TINHTRANGLUCTRA',
					@SONGAYMUON AS 'SONGAYMUON',
					@TIENPHAT AS 'TIENPHAT'
		-- SAU KHI HOÀN THÀNH TẤT CẢ THÌ TRẢ VỀ 0 LÀ ĐÚNG 1 LÀ SAI LỖI J` ĐÓ

	COMMIT
	RETURN 0
	END TRY
	BEGIN CATCH

	PRINT ERROR_MESSAGE()
	ROLLBACK 
	RETURN 1
	END CATCH







END

GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOISBN]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOISBN]
	@ISBN AS CHAR(10)
	
AS
BEGIN
	SET NOCOUNT ON;

    SELECT * FROM ISBN WHERE @ISBN = ISBN

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOMATACGIA]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOMATACGIA]
	@MATACGIA AS BIGINT
	
AS
BEGIN
	SET NOCOUNT ON;
	
    SELECT ISBN.* 
	FROM (SELECT ISBN FROM Tacgia_sach WHERE @MATACGIA = MATACGIA) TEMP INNER JOIN ISBN
	ON  TEMP.ISBN = ISBN.ISBN

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOTEN]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOTEN]
	@TENSACH AS NVARCHAR(50)
	
AS
BEGIN
	SET NOCOUNT ON;

    SELECT * FROM ISBN WHERE @TENSACH = TENSACH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOTHELOAI]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_THEOTHELOAI]
	@MATL AS BIGINT
	
AS
BEGIN
	SET NOCOUNT ON;

	SELECT * FROM ISBN WHERE @MATL = MATL

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_TIMKIEMMATACGIA]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_TIMKIEMTHONGTINSACH_TIMKIEMMATACGIA]
	@TENTACGIA AS NVARCHAR(50)
	
AS
BEGIN
	SET NOCOUNT ON;
	SELECT MATACGIA FROM Tacgia WHERE @TENTACGIA = HOTENTG
    

END




GO
/****** Object:  StoredProcedure [dbo].[SP_DOCGIA_UPDATE]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_DOCGIA_UPDATE]
	@MADG AS BIGINT,
	@COLUMN_NAME AS NVARCHAR(50),
	@COLUMN_DATA AS NVARCHAR(50)
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		IF UPPER(@COLUMN_NAME) = 'HODG'
			UPDATE Docgia
			SET HODG = @COLUMN_DATA
			WHERE MADG = @MADG
		IF UPPER(@COLUMN_NAME) = 'TENDG'
			UPDATE Docgia
			SET TenDG = @COLUMN_DATA
			WHERE MADG = @MADG
		IF UPPER(@COLUMN_NAME) = 'HODG'
			UPDATE Docgia
			SET HODG = @COLUMN_DATA
			WHERE MADG = @MADG
		IF UPPER(@COLUMN_NAME) = 'HODG'
			UPDATE Docgia
			SET HODG = @COLUMN_DATA
			WHERE MADG = @MADG
		IF UPPER(@COLUMN_NAME) = 'HODG'
			UPDATE Docgia
			SET HODG = @COLUMN_DATA
			WHERE MADG = @MADG
		IF UPPER(@COLUMN_NAME) = 'HODG'
			UPDATE Docgia
			SET HODG = @COLUMN_DATA
			WHERE MADG = @MADG
		
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_ISBN_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_ISBN_INSERT] 
	@ISBN AS NCHAR(10), -- Cai nay ti nua can phai thay doi bang cai tang ma tu dong
	@TENSACH AS NVARCHAR(100),
	@KHOSACH AS NVARCHAR(5),
	@NOIDUNG AS NVARCHAR(300),
	@HINHANHPATH AS NVARCHAR(50),
	@NGAYXUATBAN AS SMALLDATETIME,
	@LANXUATBAN AS INT,
	@SOTRANG AS INT,
	@GIA AS BIGINT,
	@NHAXB AS NVARCHAR(100),
	@MANGONNGU AS INT,
	@MATL AS NCHAR(10)
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO ISBN(ISBN, TENSACH, KHOSACH, NOIDUNG, HINHANHPATH, NGAYXUATBAN, LANXUATBAN, SOTRANG, GIA, NHAXB, MANGONNGU, MATL) VALUES(@ISBN, @TENSACH, @KHOSACH, @NOIDUNG, @HINHANHPATH, @NGAYXUATBAN, @LANXUATBAN, @SOTRANG, @GIA, @NHAXB, @MANGONNGU, @MATL)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_ISBN_SELECT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_ISBN_SELECT]
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT ISBN,TENSACH FROM ISBN
END


GO
/****** Object:  StoredProcedure [dbo].[SP_NGANTU_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_NGANTU_INSERT]
	@MOTA AS NVARCHAR(50),
	@KE AS NVARCHAR(100)
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO NGANTU( MOTA, KE) VALUES( @MOTA, @KE)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_NGANTU_SELECT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_NGANTU_SELECT]
	-- Add the parameters for the stored procedure here
	
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT mangantu,mota from Ngantu
END


GO
/****** Object:  StoredProcedure [dbo].[SP_NGONNGU_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_NGONNGU_INSERT]
	@NGONNGU AS NVARCHAR(50)
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO NGONNGU(NGONNGU) VALUES(@NGONNGU)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_NGONNGU_SELECT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE[dbo].[SP_NGONNGU_SELECT]
	-- Add the parameters for the stored procedure here

AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT * FROM Ngonngu
END


GO
/****** Object:  StoredProcedure [dbo].[SP_NHANVIEN_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_NHANVIEN_INSERT]
	@HONV AS NVARCHAR(50),
	@TENNV AS NVARCHAR(12),
	@GIOITINH AS BIT,
	@DIACHI AS NVARCHAR(100),
	@DIENTHOAI AS NVARCHAR(11),
	@EMAIL AS NVARCHAR(50)
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO NHANVIEN(HONV, TENNV, GIOITINH, DIACHI, DIENTHOAI, EMAIL) VALUES(@HONV, @TENNV, @GIOITINH, @DIACHI, @DIENTHOAI, @EMAIL)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_PHIEUMUON_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_PHIEUMUON_INSERT]
	@MADG AS BIGINT,
	@HINHTHUC AS BIT,
	@NGAYMUON AS SMALLDATETIME,
	@MANV AS INT
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO PHIEUMUON(MADG, HINHTHUC, NGAYMUON, MANV) VALUES(@MADG, @HINHTHUC, @NGAYMUON, @MANV)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_CAPNHATSACHMOI]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_SACH_CAPNHATSACHMOI]
	@ISBN as bigint,
	@MANGANTU as int
AS
BEGIN
	SET NOCOUNT ON;
	--dau sach do da co
		INSERT INTO SACH(ISBN, TINHTRANG, CHOMUON, MANGANTU) VALUES(@ISBN, 1, 0, @MANGANTU)

END


GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_DIENTU_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_SACH_DIENTU_INSERT] 
	@MASACH AS BIGINT,
	@FILEPATH AS NVARCHAR(50),
	@SOLANDOWN AS BIGINT,
	@CHOPHEPDOWN AS BIT,
	@ISBN AS NCHAR(10)
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO SACH_DIENTU(MASACH, FILEPATH, SOLANDOWN, CHOPHEPDOWN, ISBN) VALUES(@MASACH, @FILEPATH, @SOLANDOWN, @CHOPHEPDOWN, @ISBN)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_SACH_INSERT]
	@ISBN AS NCHAR(10),
	@TINHTRANG AS BIT,
	@CHOMUON AS BIT,
	@MANGANTU AS INT
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO SACH(ISBN, TINHTRANG, CHOMUON, MANGANTU) VALUES(@ISBN, @TINHTRANG, @CHOMUON, @MANGANTU)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_INSERTSACHMOI]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_SACH_INSERTSACHMOI]
	@daco as int =0,
	@TENSACH AS NVARCHAR(100),
	@KHOSACH AS NVARCHAR(5),
	@NOIDUNG AS NVARCHAR(300),
	@HINHANHPATH AS NVARCHAR(50),
	@NGAYXUATBAN AS NVARCHAR(50),
	@LANXUATBAN AS INT,
	@SOTRANG AS INT,
	@GIA AS BIGINT,
	@NHAXB AS NVARCHAR(100),
	@MANGONNGU AS INT,
	@MATL AS NCHAR(10),
	@HOTENTG AS NVARCHAR(50),
	@DIACHITG AS NVARCHAR(50),
	@DIENTHOAITG AS NVARCHAR(11),
	@MANGANTU AS int
AS
BEGIN
	
	DECLARE @ISBN bigint
	DECLARE @MATACGIA nvarchar(50)
	SET NOCOUNT ON;
	--sach do chua co
	if(@daco=0)
	BEGIN TRANSACTION
	BEGIN TRY
			INSERT INTO ISBN(TENSACH, KHOSACH, NOIDUNG, HINHANHPATH, NGAYXUATBAN, LANXUATBAN, SOTRANG, GIA, NHAXB, MANGONNGU, MATL) VALUES( @TENSACH, @KHOSACH, @NOIDUNG, @HINHANHPATH, CONVERT(varchar(8),@NGAYXUATBAN,103), @LANXUATBAN, @SOTRANG, @GIA, @NHAXB, @MANGONNGU, @MATL)
			--lay ma dau sach moi
			
			SELECT @ISBN=MAX(ISBN) FROM ISBN
			INSERT INTO SACH(ISBN, TINHTRANG, CHOMUON, MANGANTU) VALUES(@ISBN, 1, 0, @MANGANTU)
			INSERT INTO TACGIA(HOTENTG, DIACHITG, DIENTHOAITG) VALUES(@HOTENTG, @DIACHITG, @DIENTHOAITG)
			SELECT @MATACGIA=MAX(matacgia) FROM Tacgia
			INSERT INTO Tacgia_sach(matacgia,ISBN) VALUES(@MATACGIA,@ISBN)
	COMMIT
	RETURN 0
	END TRY
	BEGIN CATCH

	PRINT ERROR_MESSAGE()
	ROLLBACK 
	RETURN 1
	END CATCH	 
	--else
		--	INSERT INTO SACH(ISBN, TINHTRANG, CHOMUON, MANGANTU) VALUES(@ISBN, 1, 0, @MANGANTU)

	
END


GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_TIMKIEMTONTAISACH]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_SACH_TIMKIEMTONTAISACH]
	@LANXUATBAN AS INT,
	@TENSACH AS NVARCHAR(20),
	@TACGIA AS NVARCHAR(20)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;
	--chọn lan xuat ban ten sach ma tac gia trong 2 bang noi voi bang tac gia roi noi bang nay voi ma tac gia trong bang tac gia
		SELECT HotenTG,DienthoaiTG,DiachiTG,temp1.Lanxuatban,temp1.Tensach,temp1.matacgia FROM (SELECT ISBN.Lanxuatban,ISBN.Tensach,Tacgia_sach.matacgia
		FROM ISBN INNER JOIN Tacgia_sach
		ON ISBN.ISBN= Tacgia_sach.ISBN
		where ISBN.Lanxuatban= @LANXUATBAN and ISBN.Tensach=@TENSACH) AS temp1 
		INNER JOIN Tacgia
		ON Tacgia.Matacgia= temp1.matacgia
		where Tacgia.HotenTG=@TACGIA

END


GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_TIMSACHCU]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_SACH_TIMSACHCU]

AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;
	--tim kiem sach da cu hoac chua cho muon
	SELECT * FROM sach where tinhtrang=0 and chomuon=0
    -- Insert statements for procedure here
	
END


GO
/****** Object:  StoredProcedure [dbo].[SP_SACH_XOASACHCU]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_SACH_XOASACHCU]
	@masach as bigint 
AS
BEGIN
	DECLARE @count as bigint
	DECLARE @ISBN as bigint
	DECLARE @countmatacgia as bigint
	DECLARE @matacgia as nvarchar(50)
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;
	BEGIN TRANSACTION
	BEGIN TRY
	--chọn isbn de luc xoa het sach roi xoa isbn luon
		select @ISBN=ISBN from Sach where masach=@masach
			--xoa sach cu tuy theo id sach
		Delete from Sach where masach=@masach
		--dem xem so sach thuoc cai isbn con khong
		select @count=count(ISBN) from Sach where ISBN=@ISBN
		select @matacgia=MATACGIA from Tacgia_sach where ISBN=@ISBN
		--neu khong con thi xoa luon isbn
		if @count=0
			BEGIN
				delete from Tacgia_sach where MATACGIA=@matacgia
				select @countmatacgia=count(Matacgia) from Tacgia_sach where ISBN=@ISBN
				if @countmatacgia=0
					BEGIN	
						delete from Tacgia where MATACGIA=@matacgia
					END
				delete from isbn where ISBN=@ISBN
			END
	COMMIT
	RETURN 0
	END TRY
	BEGIN CATCH

	PRINT ERROR_MESSAGE()
	ROLLBACK 
	RETURN 1
	END CATCH	 
    -- Insert statements for procedure here
END


GO
/****** Object:  StoredProcedure [dbo].[SP_TACGIA_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_TACGIA_INSERT]
	@HOTENTG AS NVARCHAR(50),
	@DIACHITG AS NVARCHAR(50),
	@DIENTHOAITG AS NVARCHAR(11)
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO TACGIA(HOTENTG, DIACHITG, DIENTHOAITG) VALUES(@HOTENTG, @DIACHITG, @DIENTHOAITG)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_TACGIA_SACH_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_TACGIA_SACH_INSERT]
	@MATACGIA AS INT,
	@ISBN AS NCHAR(10)
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO TACGIA_SACH(MATACGIA, ISBN) VALUES(@MATACGIA, @ISBN)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_THELOAI_INSERT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SP_THELOAI_INSERT]
	@MATL AS NCHAR(5),
	@THELOAI AS NVARCHAR(50)
	
AS
BEGIN
	SET NOCOUNT ON;

    BEGIN TRY
		INSERT INTO THELOAI(MATL, THELOAI) VALUES(@MATL, @THELOAI)
		return 0
	END TRY
	BEGIN CATCH
		return 1
	END CATCH

END




GO
/****** Object:  StoredProcedure [dbo].[SP_THELOAI_SELECT]    Script Date: 24/06/2017 17:40:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[SP_THELOAI_SELECT]
	-- Add the parameters for the stored procedure here
	
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT * from Theloai
END


GO

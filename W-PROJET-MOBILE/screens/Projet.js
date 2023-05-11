import { Image, Text, View, TouchableOpacity, FlatList } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

const datas = [
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            " in RCTView (created by View) in View (created by SceneView) in RNSScreen (created by AnimatedComponent) in AnimatedComponent in AnimatedComponentWrapper (created by  InnerScreen) in DelayedFreeze (created by InnerScreen) Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
    {
        id: "123",
        title: "Abdlomghit",
        date: new Date().toLocaleDateString(),
        description:
            "Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital Ex- Professor & Head of Department Department of Neurosurgery Dhaka Medical College & Hospital",
    },
];
export default function Projet({ navigation }) {
    const [info, setInfo] = useState([]);

    // useEffect(() => {

    //     const fetchDataDoctor = async () => {
    //         try {
    //             const response = await axios.get(
    //                 `${API_BASE_URL}/api/tasks`
    //             );
    //             const data = response.data;
    //             consol.log(data);
    //         } catch (error) {
    //             console.error(error);
    //         }
    //     };

    //     fetchDataDoctor();
    // }, []);

    return (
        <View
            className="flex-1  "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className=" flex  w-full flex-row justify-between rounded-b-3xl bg-[#1C6BA4] px-4 pb-8 pt-16 drop-shadow-xl">
                <AntDesign
                    name="arrowleft"
                    size={24}
                    color="white"
                    onPress={() => navigation.goBack()}
                />
                <Text className="text-start text-xl font-extrabold text-white">
                    Projet
                </Text>
                <Text className="text-xl font-extrabold  text-[#4DCFC0]">
                    {"  "}
                </Text>
            </View>
            <View className="mt-24 flex w-full items-center pl-5">
                <View className="mx-6 rounded-xl  bg-white p-2 shadow-xl shadow-cyan-400">
                    <View className="mx-3">
                        <Text className="mb-2 font-bold">About</Text>
                        <View className="flex-row">
                            <Text className="text-base font-light text-gray-500">
                                Name :
                            </Text>
                            <Text className="text-sm font-light text-gray-500">
                                {"nammmee"}
                            </Text>
                        </View>
                        <View className="flex-row">
                            <Text className="text-base font-light text-gray-500">
                                description :
                            </Text>
                            <Text className="max-w-min mr-2 text-sm font-light text-gray-500">
                                {"kkkkkkkkk"}
                                {"kkkkkkkkk"}
                                {"mmmmmmmmmmmmmmmmmmmmmm"}
                                {"kkkkkkkkk"}
                                {"kkkkkkkkk"}
                                {"kkkkkkkkk"} ' '{"kkkkkkkkk"}
                            </Text>
                        </View>
                        <View className="flex-row">
                            <Text className="text-base font-light text-gray-500">
                                Projet start at :
                            </Text>
                            <Text className="text-sm font-light text-gray-500">
                                {"Projet start at"}
                            </Text>
                        </View>
                        <View className="flex-row">
                            <Text className="text-base font-light text-gray-500">
                                Site Name :
                            </Text>
                            <Text className="text-sm font-light text-gray-500">
                                {"Site Name"}
                            </Text>
                        </View>
                    </View>
                </View>
            </View>

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_List_Doc")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_List_Doc")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#FF0000]">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() =>
                            navigation.navigate("Pat_List_Traitement")
                        }
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Pat_Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}

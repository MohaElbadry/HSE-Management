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
export default function Pat_Home_Screen({ navigation }) {
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
            <View className="rounded-b-4xl w-full rounded-xl bg-white px-4 pt-16 ">
                <Text className="px-2 text-4xl font-semibold text-black">
                    HSE_Mnagement
                </Text>

                <Text className="text-sl mx-4 mt-2 pb-4 text-center font-normal text-[#16c599]">
                    Explore Our sensibility Post
                </Text>
            </View>

            <FlatList
                className="mx-4 mb-16 flex-1"
                data={datas}
                keyExtractor={(item) => item.id}
                showsHorizontalScrollIndicator={false}
                showsVerticalScrollIndicator={false}
                renderItem={({ item }) => (
                    <TouchableOpacity className="m-3 rounded-2xl bg-white p-4 shadow-xl shadow-orange-300">
                        <View>
                            <View>
                                <Text className="text-xl font-semibold">
                                    {item.title}
                                </Text>
                                <Text className="text-center text-gray-500">
                                    {item.description}
                                </Text>
                            </View>
                        </View>
                    </TouchableOpacity>
                )}
            />

            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
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
